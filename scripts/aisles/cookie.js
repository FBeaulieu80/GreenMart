/* variables for the cookie types & image change */
const img = document.querySelector(".grid-item img");
const button1 = document.querySelector("#button1");
const button2 = document.querySelector("#button2");
const button3 = document.querySelector("#button3");

/* code for the cookie types & image change */
button1.addEventListener("click", () => {
    img.src = "../../images/snacks/Chocolate%20cookies.jpg";
    localStorage.setItem(LocalStorageKeys.COOKIE_TYPE, "button1");
})

button2.addEventListener("click", () => {
    img.src = "../../images/snacks/peanut-butter-1164861_1920.jpg";
    localStorage.setItem(LocalStorageKeys.COOKIE_TYPE, "button2");
})

button3.addEventListener("click", () => {
    img.src = "../../images/snacks/spice-643848_1920.jpg";
    localStorage.setItem(LocalStorageKeys.COOKIE_TYPE, "button3");
})

/* variables for the description detail button */
const description = document.getElementById("description");
const button4 = document.getElementById("details");

/* code for the description detail button */
button4.onclick = function () {
    if (description.className === "open") {
        // shrink the box
        description.className = ""
        button4.innerHTML = "More Description"
    } else {
        //expand the box
        description.className = "open"
        button4.innerHTML = "Less Description"
    }
}

/* code for the cookie increment & decrementing*/

function subtractQuantity() {
    let quantity = document.getElementById("cookquantity");
    if (quantity.value > 0) {
        quantity.value--;
    }
    calculateSubtotal();
    localStorage.setItem(LocalStorageKeys.ITEM_COUNT, quantity.value);
}

function addQuantity() {
    let quantity = document.getElementById("cookquantity");
    quantity.value++
    calculateSubtotal();
    localStorage.setItem(LocalStorageKeys.ITEM_COUNT, quantity.value);
}

function addToCart() {
    alert("Your items have been added to your cart!");
}

function calculateSubtotal() {
    document.getElementById("subtotal").innerHTML = "$" + (document.getElementById("cookquantity").value * 4.99).toFixed(2)
}

/* REFRESH FEATURE */
const LocalStorageKeys = {
    COOKIE_TYPE: "cookie-type",
    COOKIE_TYPES: {CHOCOLATE: "button1", PEANUT_BUTTER: "button2", SALTED_CARAMEL: "button3"},
    ITEM_COUNT: "item-count"
};

function remember() {
    if (localStorage.getItem(LocalStorageKeys.ITEM_COUNT))
        document.getElementById("cookquantity").value = localStorage.getItem(LocalStorageKeys.ITEM_COUNT);

    if (localStorage.getItem(LocalStorageKeys.COOKIE_TYPE)) {
        document.getElementById(localStorage.getItem(LocalStorageKeys.COOKIE_TYPE)).click();
    }
    calculateSubtotal();
}