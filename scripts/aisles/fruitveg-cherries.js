
function bing() {
    document.getElementById('cherry-image').src='../../images/fruit-veg/bing-cherry.jpg'
    document.getElementById("bing").style.border = "solid";
    document.getElementById("bing").style.borderWidth = "2px";

    // Reset other buttons
    document.getElementById("rainier").style.border = "none";
    document.getElementById("rainier").style.borderWidth = "0px";
    document.getElementById("tartarian").style.border = "none";
    document.getElementById("tartarian").style.borderWidth = "0px";
}

function rainier() {
    document.getElementById('cherry-image').src='../../images/fruit-veg/rainier-cherry.jpg'
    document.getElementById("rainier").style.border = "solid";
    document.getElementById("rainier").style.borderWidth = "2px";

    // Reset other buttons
    document.getElementById("bing").style.border = "none";
    document.getElementById("bing").style.borderWidth = "0px";
    document.getElementById("tartarian").style.border = "none";
    document.getElementById("tartarian").style.borderWidth = "0px";
}

function tartarian() {
    document.getElementById('cherry-image').src='../../images/fruit-veg/tartarian-cherry.jpg'
    document.getElementById("tartarian").style.border = "solid";
    document.getElementById("tartarian").style.borderWidth = "2px";

    // Reset other buttons
    document.getElementById("rainier").style.border = "none";
    document.getElementById("rainier").style.borderWidth = "0px";
    document.getElementById("bing").style.border = "none";
    document.getElementById("bing").style.borderWidth = "0px";
}

function organic() {
    document.getElementById("organic").style.border = "solid";
    document.getElementById("organic").style.borderWidth = "2px";

    // Reset other button
    document.getElementById("regular").style.border = "none";
    document.getElementById("regular").style.borderWidth = "0px";
}

function regular() {
    document.getElementById("regular").style.border = "solid";
    document.getElementById("regular").style.borderWidth = "2px";

    // Reset other buttons
    document.getElementById("organic").style.border = "none";
    document.getElementById("organic").style.borderWidth = "0px";
}

function detailedDescription() {
    let x = document.getElementById("detailed-description");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function quantityIncr(){
    if (document.getElementById("quantity").value < 30){
        document.getElementById("quantity").value++;
    }
}
function quantityDecr() {
    if (document.getElementById("quantity").value > 0){
        document.getElementById("quantity").value--;
    }
}