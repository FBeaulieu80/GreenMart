function setSelected(e, src=null) {
    if (e.classList.contains("cherryTypeButton")) {
        let cherryTypeButtons = document.getElementsByClassName("cherryTypeButton");
        for (let i = 0; i < cherryTypeButtons.length; i++) {
            cherryTypeButtons[i].style.border = "none";
            cherryTypeButtons[i].style.borderWidth = "0px";
        }
        document.getElementById('cherry-image').src= src;
        localStorage.setItem(LocalStorageKeys.CHERRY_URL, src);
        localStorage.setItem(LocalStorageKeys.CHERRY_TYPE, e.id);
    }
    else {
        let organicButtons = document.getElementsByClassName("cherryOrganicButton");
        for (let i = 0; i < organicButtons.length; i++) {
            organicButtons[i].style.border = "none";
            organicButtons[i].style.borderWidth = "0px";
        }
        localStorage.setItem(LocalStorageKeys.IS_ORGANIC, e.id);
    }

    e.style.border = "solid";
    e.style.borderWidth = "2px";
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
    let quantity = document.getElementById("quantity");
    if (quantity.value < 30){
        quantity.value++;
    }
    calculateSubtotal();
    localStorage.setItem(LocalStorageKeys.ITEM_COUNT, quantity.value);
}
function quantityDecr() {
    let quantity = document.getElementById("quantity");
    if (quantity.value > 0){
        quantity.value--;
    }
    calculateSubtotal();
    localStorage.setItem(LocalStorageKeys.ITEM_COUNT, quantity.value);
}

function calculateSubtotal() {
    document.getElementById("price").innerHTML = "$" + (Math.floor((4.99 * document.getElementById("quantity").value) * 100) / 100).toString();
}

function addToCartAlert() {
    if (document.getElementById("quantity").value === "0"){
        alert('Please select at least 1 product!')
    }
    else {
        alert(document.getElementById("quantity").value + ' products added to cart!')
    }

}

const LocalStorageKeys = {
    CHERRY_TYPE: "cherry-type",
    CHERRY_URL: "url",
    CHERRY_TYPES: { BING: "bing", RAINIER: "rainier", BLACK_TARTARIAN: "black-tartarian" },
    IS_ORGANIC: "is-organic",
    ORGANIC: { YES: "organic", NO: "regular"},
    ITEM_COUNT: "cherries-count"
};

function remember() {
    if (localStorage.getItem(LocalStorageKeys.ITEM_COUNT))
        document.getElementById("quantity").value = localStorage.getItem(LocalStorageKeys.ITEM_COUNT);

    if (localStorage.getItem(LocalStorageKeys.CHERRY_TYPE)) {
        setSelected(document.getElementById(localStorage.getItem(LocalStorageKeys.CHERRY_TYPE)),
                    localStorage.getItem(LocalStorageKeys.CHERRY_URL));

    }

    if (localStorage.getItem(LocalStorageKeys.IS_ORGANIC)) {
        setSelected(document.getElementById(localStorage.getItem(LocalStorageKeys.IS_ORGANIC)));
    }
    calculateSubtotal();
}