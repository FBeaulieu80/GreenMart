let img = document.querySelector(".grid-item img");
let button1 = document.querySelector("#button1");
let button2 = document.querySelector("#button2");
let button3 = document.querySelector("#button3");

button1.addEventListener("click", () => {
    img.src = "../../images/snacks/Chocolate%20cookies.jpg"
})

button2.addEventListener("click", () => {
    img.src = "../../images/snacks/peanut-butter-1164861_1920.jpg"
})

button3.addEventListener("click", () => {
    img.src = "../../images/snacks/spice-643848_1920.jpg"
})