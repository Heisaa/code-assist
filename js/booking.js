const calendar = document.getElementById("calendar");
const time = document.getElementById("time");
const confirmBox = document.getElementById("confirm-box");
const closeX = document.getElementById("close");
const confirmTime = document.getElementById("confirm-time");
const bookingForm = document.getElementById("booking-form");
const subjectSelection = document.getElementById("subject-selection");

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
let indexOfWeekStart = aYear - currentWeekDay + 1; // + 1 because weeks start on mondays
const weekStart = dates[indexOfWeekStart];

// Format for weekday names
const dayFormatter = new Intl.DateTimeFormat("en-US", { weekday: "short" });
const monthFormatter = new Intl.DateTimeFormat("en-US", { month: "short" });
const fullFormatter = new Intl.DateTimeFormat("en-GB");

const displayCalendar = (startDateIndex) => {
    // Remove previous page
    time.innerHTML = "";
    calendar.innerHTML = "";

    // Set time period
    time.insertAdjacentHTML("beforeend", `${fullFormatter.format(dates[startDateIndex])} - ${fullFormatter.format(dates[startDateIndex + 6])}`);

    // Set the dates in calendar
    for (let i = startDateIndex; i < (startDateIndex + 7); i++) {
        const weekDayName = dayFormatter.format(dates[i]);
        const weekDay = dates[i].getDate();

        if (i == aYear) {
            calendar.insertAdjacentHTML("beforeend",
                `<div class="columnHeader today">
            <div>
                ${weekDayName}
            </div>
            <div>
                ${weekDay}
            </div>
        </div>`);
        } else {
            calendar.insertAdjacentHTML("beforeend",
                `<div class="columnHeader">
                <div>
                    ${weekDayName}
                </div>
                <div>
                    ${weekDay}
                </div>
            </div>`);
        }

    }

    // timeslots
    const timeSlotPrinter = (timeslot) => {
        for (let i = startDateIndex; i < (startDateIndex + 7); i++) {

            timeslotStartHour = timeslot.slice(0, 2);
            // Decide whitch are bookable
            if (i > aYear) {
                calendar.insertAdjacentHTML("beforeend",
                    `<div class="timeslot bookable" id="${fullFormatter.format(dates[i])} ${timeslot}">
                        ${timeslot}
                    </div>`);
            } else if (i == aYear && timeslotStartHour > currentDate.getHours()) {
                calendar.insertAdjacentHTML("beforeend",
                    `<div class="timeslot bookable" id="${fullFormatter.format(dates[i])} ${timeslot}">
                        ${timeslot}
                </div>`);
            } else {
                calendar.insertAdjacentHTML("beforeend",
                    `<div class="timeslot" id="${fullFormatter.format(dates[i])} ${timeslot}">
                        ${timeslot}
                    </div>`);
            }
        }
    };

    timeSlotPrinter("08:00 - 10:00");
    timeSlotPrinter("10:00 - 12:00");
    timeSlotPrinter("13:00 - 15:00");
    timeSlotPrinter("15:00 - 17:00");
}

displayCalendar(indexOfWeekStart);


const left = () => {
    indexOfWeekStart -= 7;
    displayCalendar(indexOfWeekStart);
}

const right = () => {
    indexOfWeekStart += 7;
    displayCalendar(indexOfWeekStart);
}



// Event listner for click on timeslots
calendar.addEventListener("click", (event) => {
    if (event.target.className == "timeslot bookable") {
        confirmBox.style.display = "block";
        let timeText = event.target.id.split(" ");
        confirmTime.innerHTML = timeText[0] + "<br>" + timeText[1] + timeText[2] + timeText[3];
    }
});

closeX.addEventListener("click", () => {
    confirmBox.style.display = "none";
});

// Submit event listener
bookingForm.addEventListener("submit", (event) => {
    if (subjectSelection == null) {
        event.preventDefault();
    }
});