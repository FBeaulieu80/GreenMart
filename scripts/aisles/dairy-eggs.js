function ShowAndHide() {
    const x = document.getElementById('SectionName');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}

function increaseValue() {
    let value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
    calculateSubtotal();
    localStorage.setItem(LocalStorageKeys.ITEM_COUNT, value);
}

function decreaseValue() {
    let value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value = value;
    calculateSubtotal();
    localStorage.setItem(LocalStorageKeys.ITEM_COUNT, value);
}

function calculateSubtotal() {
    document.getElementById("price").innerHTML = "$" + (Math.floor((3.29 * document.getElementById("number").value) * 100) / 100).toString();
}

function swapImage() {
    const image = document.getElementById("imageToSwap");
    const dropd = document.getElementById("dlist");
    image.src = dropd.value;
    localStorage.setItem(LocalStorageKeys.CHEESE_TYPE, dropd.value);
}

const LocalStorageKeys = {
    CHEESE_TYPE: "cheese-type",
    CHEESE_TYPES: {REGULAR: "regular", CHEDDAR: "cheddar", PARMESAN: "parmesan"},
    ITEM_COUNT: "cheese-count"
};

function remember() {
    if (localStorage.getItem(LocalStorageKeys.ITEM_COUNT)) {
        document.getElementById("number").value = localStorage.getItem(LocalStorageKeys.ITEM_COUNT);
    }

    if (localStorage.getItem(LocalStorageKeys.CHEESE_TYPE)) {
        document.getElementById("dlist").value = localStorage.getItem(LocalStorageKeys.CHEESE_TYPE);
    }
    swapImage();
    calculateSubtotal();
}
