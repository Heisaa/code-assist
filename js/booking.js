const calendar = document.querySelector("#calendar");

const dates = [];
const currentDate = new Date();

// Start the calendar one year earlier than current date
const startDate = new Date();
const aYear = 365;
startDate.setDate(currentDate.getDate() - aYear);

// Generate list of dates, current date will be dates[aYear]
for (let i = 0; i < 730; i++) {
    const tempDate = new Date(startDate.getTime());
    dates.push(tempDate);

    startDate.setDate(startDate.getDate() + 1);
}

const currentWeekDay = dates[aYear].getDay();
const indexOfWeekStart = aYear - currentWeekDay + 1; // + 1 because weeks start on mondays
const weekStart = dates[indexOfWeekStart];
console.log(weekStart);

// Format for weekday names
const optionsDay = {weekday: "short"};
const optionsMonth = {month: "short"}
const dayFormatter = new Intl.DateTimeFormat("en-US", optionsDay);
const monthFormatter = new Intl.DateTimeFormat("en-US", optionsMonth);

// Set the dates in calendar
for (let i = indexOfWeekStart; i < (indexOfWeekStart + 7); i++) {
    const month = monthFormatter.format(dates[i]);
    const weekDayName = dayFormatter.format(dates[i]);
    const weekDay = dates[i].getDate();

    calendar.insertAdjacentHTML("beforeend", `<div class="columnHeader">
    <div>
        ${weekDayName}
    </div>
    <div>
        ${weekDay}
    </div>
    </div>`);


}

// timeslots
const timeSlotPrinter = (timeslot) => {
    for (let i = 0; i < 7; i++) {
        calendar.insertAdjacentHTML("beforeend", `<div class="timeslot">
            ${timeslot}
            </div>`);
    }
}

timeSlotPrinter("08:00 - 10:00");
timeSlotPrinter("10:00 - 12:00");
timeSlotPrinter("13:00 - 15:00");
timeSlotPrinter("15:00 - 17:00");


