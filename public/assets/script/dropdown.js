const dropdown = document.querySelector(".sign");
const dropdownMenu = document.querySelector(".wrapper");

let isMouseIn = false;
dropdown.addEventListener("mouseenter", () => {
    dropdownMenu.classList.add("menu-visible");
})

dropdown.addEventListener("mouseleave", (event) => {

    setTimeout(() => {
        if (!isMouseIn) {
            dropdownMenu.classList.remove("menu-visible");
        }
    }, 100)
});


dropdownMenu.addEventListener("mouseenter", () => {
    isMouseIn = true;
});

dropdownMenu.addEventListener("mouseleave", () => {
    isMouseIn = false;
});