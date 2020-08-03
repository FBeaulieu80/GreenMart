const ChickenTypes = {
    WHOLE: 'whole',
    BREAST: 'breast',
    LEG: 'leg'
};

function showDesc() {
    let toggleDesc = document.getElementsByClassName("toggleDesc")[0];
    let description = toggleDesc.nextElementSibling;

    toggleDesc.classList.toggle("active");

    if (description.style.maxHeight) {
        description.style.maxHeight = null;
    } else {
        description.style.maxHeight = description.scrollHeight + "px";
    }
}

function chooseChicken(type) {

    let image = document.getElementById("image").querySelector("img");
    let descButton = document.getElementById("descButton");
    let location = document.getElementById("location");
    let price = document.getElementById("chickenPrice");

    switch (type) {
        case ChickenTypes.WHOLE:
            image.src = "../../images/meat/chicken-whole.jpg";
            image.alt = "Chicken Whole";
            descButton.innerText = "The chicken with all parts intact, generally including the giblets stuffed in the cavity. Consists of white and dark meat.";
            location.innerText = "Product of Alberta.";
            price.innerText = "$9.99/ea";

            document.getElementById("whole").style.border = "solid";
            document.getElementById("whole").style.borderWidth = "2px";

            // Reset other buttons
            document.getElementById("breast").style.border = "none";
            document.getElementById("breast").style.borderWidth = "0px";
            document.getElementById("leg").style.border = "none";
            document.getElementById("leg").style.borderWidth = "0px";

            sessionStorage.setItem('cut', 'whole');
            subtotal();
            break;

        case ChickenTypes.BREAST:
            image.src = "../../images/meat/chicken-breast.jpg";
            image.alt = "Chicken Breast";
            descButton.innerText = "The entire breast portion of the chicken. It is available bone-in, boneless, skin-on and skinless. Consists of white meat only.";
            location.innerText = "Product of Nova Scotia.";
            price.innerText = "$5.99/ea";

            document.getElementById("breast").style.border = "solid";
            document.getElementById("breast").style.borderWidth = "2px";

            // Reset other buttons
            document.getElementById("whole").style.border = "none";
            document.getElementById("whole").style.borderWidth = "0px";
            document.getElementById("leg").style.border = "none";
            document.getElementById("leg").style.borderWidth = "0px";

            sessionStorage.setItem('cut', 'breast');
            subtotal();
            break;

        case ChickenTypes.LEG:
            image.src = "../../images/meat/chicken-leg.jpg";
            image.alt = "Chicken Leg";
            descButton.innerHTML = "The leg of the chicken consists of two parts, which are the thigh and the drumstick. Consist of dark meat only.";
            location.innerText = "Product of Quebec.";
            price.innerText = "$2.99/ea";

            document.getElementById("leg").style.border = "solid";
            document.getElementById("leg").style.borderWidth = "2px";

            // Reset other buttons
            document.getElementById("breast").style.border = "none";
            document.getElementById("breast").style.borderWidth = "0px";
            document.getElementById("whole").style.border = "none";
            document.getElementById("whole").style.borderWidth = "0px";

            sessionStorage.setItem('cut', 'leg');
            subtotal();
            break;

        default:
            console.log("Error...");
    }
}

function grilled() {
    sessionStorage.setItem('cook', "grilled");
    document.getElementById("grilled").style.border = "solid";
    document.getElementById("grilled").style.borderWidth = "2px";

    // Reset other button
    document.getElementById("roasted").style.border = "none";
    document.getElementById("roasted").style.borderWidth = "0px";
}

function roasted() {
    sessionStorage.setItem('cook', "roasted");
    document.getElementById("roasted").style.border = "solid";
    document.getElementById("roasted").style.borderWidth = "2px";

    // Reset other buttons
    document.getElementById("grilled").style.border = "none";
    document.getElementById("grilled").style.borderWidth = "0px";
}

function whole() {
    document.getElementById('cherry-image').src="../../images/meat/chicken-whole.jpg"
    document.getElementById("whole").style.border = "solid";
    document.getElementById("whole").style.borderWidth = "2px";

    // Reset other buttons
    document.getElementById("breast").style.border = "none";
    document.getElementById("breast").style.borderWidth = "0px";
    document.getElementById("leg").style.border = "none";
    document.getElementById("leg").style.borderWidth = "0px";
}

function breast() {
    document.getElementById('cherry-image').src="../../images/meat/chicken-breast.jpg"
    document.getElementById("breast").style.border = "solid";
    document.getElementById("breast").style.borderWidth = "2px";

    // Reset other buttons
    document.getElementById("whole").style.border = "none";
    document.getElementById("whole").style.borderWidth = "0px";
    document.getElementById("leg").style.border = "none";
    document.getElementById("leg").style.borderWidth = "0px";
}

function leg() {
    document.getElementById('cherry-image').src="../../images/meat/chicken-leg.jpg"
    document.getElementById("leg").style.border = "solid";
    document.getElementById("leg").style.borderWidth = "2px";

    // Reset other buttons
    document.getElementById("breast").style.border = "none";
    document.getElementById("breast").style.borderWidth = "0px";
    document.getElementById("whole").style.border = "none";
    document.getElementById("whole").style.borderWidth = "0px";
}

function add() {
    if (document.getElementById("quantity").value < 1000){
        document.getElementById("quantity").value++;
    }
    switch (sessionStorage.getItem('cut')) {
        case 'whole':
            document.getElementById("price").innerHTML = "$" + (Math.floor((9.99 * document.getElementById("quantity").value) * 100) / 100).toString();
            break;
        case 'breast':
            document.getElementById("price").innerHTML = "$" + (Math.floor((5.99 * document.getElementById("quantity").value) * 100) / 100).toString();
            break;
        case 'leg':
            document.getElementById("price").innerHTML = "$" + (Math.floor((2.99 * document.getElementById("quantity").value) * 100) / 100).toString();
            break;
        default:
            console.log("Error");
    }
}

function subtotal() {
    switch (sessionStorage.getItem('cut')) {
        case 'whole':
            document.getElementById("price").innerHTML = "$" + (Math.floor((9.99 * document.getElementById("quantity").value) * 100) / 100).toString();
            break;
        case 'breast':
            document.getElementById("price").innerHTML = "$" + (Math.floor((5.99 * document.getElementById("quantity").value) * 100) / 100).toString();
            break;
        case 'leg':
            document.getElementById("price").innerHTML = "$" + (Math.floor((2.99 * document.getElementById("quantity").value) * 100) / 100).toString();
            break;
        default:
            console.log("Error");
    }
}

function subtract() {
    if (document.getElementById("quantity").value > 0){
        document.getElementById("quantity").value--;
    }
    switch (sessionStorage.getItem('cut')) {
        case 'whole':
            document.getElementById("price").innerHTML = "$" + (Math.floor((9.99 * document.getElementById("quantity").value) * 100) / 100).toString();
            break;
        case 'breast':
            document.getElementById("price").innerHTML = "$" + (Math.floor((5.99 * document.getElementById("quantity").value) * 100) / 100).toString();
            break;
        case 'leg':
            document.getElementById("price").innerHTML = "$" + (Math.floor((2.99 * document.getElementById("quantity").value) * 100) / 100).toString();
            break;
        default:
            console.log("Error");
    }
}

function addToCartAlert() {
    if (document.getElementById("quantity").value == 0){
        alert('Please select at least 1 product!')
    }
    else if (document.getElementById("quantity").value == 1){
        alert(document.getElementById("quantity").value + ' item has been added to the cart')
    }
    else {
        alert(document.getElementById("quantity").value + ' items have been added to the cart')
    }
}

function cook() {
    if (sessionStorage.getItem('cook') == "roasted") {
        roasted()
    }
    else {
        grilled()
    }
}

function refresh () {
    if (sessionStorage.getItem('cut') == 'breast') {
        chooseChicken(ChickenTypes.BREAST);
    }
    else if (sessionStorage.getItem('cut') == 'leg') {
        chooseChicken(ChickenTypes.LEG);
    }
    else {
        chooseChicken(ChickenTypes.WHOLE);
    }
    cook();
    subtotal();
}
