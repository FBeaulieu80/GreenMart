function whole() {
    document.getElementById('image').querySelector("img").src="../../images/meat/chicken-whole.jpg"
    document.getElementById('image').alt = "Chicken Whole";
    document.getElementById("descButton").innerHTML = "The chicken with all parts intact, generally including the giblets stuffed in the cavity. Consists of white and dark meat.";
    document.getElementById("location").innerText = "Product of Alberta.";
    document.getElementById("price").innerText = "$9.99/ea";
    sessionStorage.setItem('cut', 'whole');
    subtotal();

    document.getElementById("whole").style.border = "solid";
    document.getElementById("whole").style.borderWidth = "2px";
    document.getElementById("breast").style.border = "none";
    document.getElementById("breast").style.borderWidth = "0px";
    document.getElementById("leg").style.border = "none";
    document.getElementById("leg").style.borderWidth = "0px";
}

function breast() {
    document.getElementById('image').querySelector("img").src="../../images/meat/chicken-breast.jpg"
    document.getElementById('image').alt = "Chicken Breast";
    document.getElementById("descButton").innerHTML = "The entire breast portion of the chicken. It is available bone-in, boneless, skin-on and skinless. Consists of white meat only.";
    document.getElementById("location").innerText = "Product of Nova Scotia.";
    document.getElementById("price").innerText = "$5.99/ea";
    sessionStorage.setItem('cut', 'breast');
    subtotal();

    document.getElementById("breast").style.border = "solid";
    document.getElementById("breast").style.borderWidth = "2px";
    document.getElementById("whole").style.border = "none";
    document.getElementById("whole").style.borderWidth = "0px";
    document.getElementById("leg").style.border = "none";
    document.getElementById("leg").style.borderWidth = "0px";
}

function leg() {
    document.getElementById('image').querySelector("img").src="../../images/meat/chicken-leg.jpg";
    document.getElementById('image').alt = "Chicken Leg";
    document.getElementById("descButton").innerHTML = "The leg of the chicken consists of two parts, which are the thigh and the drumstick. Consist of dark meat only.";
    document.getElementById("location").innerText = "Product of Quebec.";
    document.getElementById("price").innerText = "$2.99/ea";
    sessionStorage.setItem('cut', 'leg');
    subtotal();

    document.getElementById("leg").style.border = "solid";
    document.getElementById("leg").style.borderWidth = "2px";
    document.getElementById("breast").style.border = "none";
    document.getElementById("breast").style.borderWidth = "0px";
    document.getElementById("whole").style.border = "none";
    document.getElementById("whole").style.borderWidth = "0px";
}

function grilled() {
    sessionStorage.setItem('cook', "grilled");
    document.getElementById("grilled").style.border = "solid";
    document.getElementById("grilled").style.borderWidth = "2px";
    document.getElementById("roasted").style.border = "none";
    document.getElementById("roasted").style.borderWidth = "0px";
}

function roasted() {
    sessionStorage.setItem('cook', "roasted");
    document.getElementById("roasted").style.border = "solid";
    document.getElementById("roasted").style.borderWidth = "2px";
    document.getElementById("grilled").style.border = "none";
    document.getElementById("grilled").style.borderWidth = "0px";
}

function subtotal() {
    switch (sessionStorage.getItem('cut')) {
        case 'whole':
            document.getElementById("current-price").innerHTML = "$" + (document.getElementById("quantity").value * 9.99).toFixed(2);
            break;
        case 'breast':
            document.getElementById("current-price").innerHTML = "$" + (document.getElementById("quantity").value * 5.99).toFixed(2);
            break;
        case 'leg':
            document.getElementById("current-price").innerHTML = "$" + (document.getElementById("quantity").value * 2.99).toFixed(2);
            break;
        default:
            console.log("Error");
    }
}

function add() {
    document.getElementById("quantity").value++;
    subtotal();
}

function subtract() {
    if (document.getElementById("quantity").value > 0){
        document.getElementById("quantity").value--;
    }
    subtotal();
}

function notification() {
    if (document.getElementById("quantity").value == 0){
        alert('Warning: No items selected!')
    }
    else if (document.getElementById("quantity").value == 1){
        alert(document.getElementById("quantity").value + ' item has been added to the cart')
    }
    else {
        alert(document.getElementById("quantity").value + ' items have been added to the cart')
    }
}

function cut() {
    if (sessionStorage.getItem('cut') == "breast") {
        breast();
    }
    else if (sessionStorage.getItem('cut') == "leg") {
        leg();
    }
    else {
        whole();
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

function showDesc() {
    if (document.getElementById("toggleDesc").nextElementSibling.style.maxHeight) {
        document.getElementById("toggleDesc").nextElementSibling.style.maxHeight = null;
    } else {
        document.getElementById("toggleDesc").nextElementSibling.style.maxHeight = document.getElementById("toggleDesc").nextElementSibling.scrollHeight + "px";
    }
}

function refresh () {
    cut();
    cook();
    subtotal();
}
