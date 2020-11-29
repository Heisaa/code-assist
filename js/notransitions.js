// No transitions during resize
const classes = document.body.classList;
let timer = 0;

window.addEventListener("resize", () => {
    if (timer) {
        clearTimeout(timer);
        timer = null;
    } else {
        classes.add("stop-transitions");
    }

    timer = setTimeout(() => {
        classes.remove("stop-transitions");
        timer = null;
    }, 100);
});