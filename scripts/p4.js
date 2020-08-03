function checkOut(){
    alert("You have successfully completed your order. Your items will arrive in 2-3 business days. Thank you for shopping at Green Mart! See you again soon!");
}


function addQuantity1() {
    document.getElementById("number1").value++
    document.getElementById("subtotal1").innerHTML = "$" + (document.getElementById("number1").value * 11.99).toFixed(2)
    hideTotal()
    calculateSubtotal()
    calculateQST()
    calculateGST()
    updateTopBanner()
    localStorage.setItem(LocalStorageKeys.ITEM1_COUNT, document.getElementById("number1").value);
}
function addQuantity2() {
    document.getElementById("number2").value++
    document.getElementById("subtotal2").innerHTML = "$" + (document.getElementById("number2").value * 3.29).toFixed(2)
    hideTotal()
    calculateSubtotal()
    calculateQST()
    calculateGST()
    updateTopBanner()
    localStorage.setItem(LocalStorageKeys.ITEM2_COUNT, document.getElementById("number2").value);
}
function addQuantity3() {
    document.getElementById("number3").value++
    document.getElementById("subtotal3").innerHTML = "$" + (document.getElementById("number3").value * 4.99).toFixed(2)
    hideTotal()
    calculateSubtotal()
    calculateQST()
    calculateGST()
    updateTopBanner()
    localStorage.setItem(LocalStorageKeys.ITEM3_COUNT, document.getElementById("number3").value);
}
function addQuantity4() {
    document.getElementById("number4").value++
    document.getElementById("subtotal4").innerHTML = "$" + (document.getElementById("number4").value * 9.99).toFixed(2)
    hideTotal()
    calculateSubtotal()
    calculateQST()
    calculateGST()
    updateTopBanner()
    localStorage.setItem(LocalStorageKeys.ITEM4_COUNT, document.getElementById("number4").value);
}

function subtractQuantity1() {
    if (document.getElementById("number1").value > 0) {
        document.getElementById("number1").value--
        document.getElementById("subtotal1").innerHTML = "$" + (document.getElementById("number1").value * 11.99).toFixed(2)
        hideTotal()
        calculateSubtotal()
        calculateQST()
        calculateGST()
        updateTopBanner()
        localStorage.setItem(LocalStorageKeys.ITEM1_COUNT, document.getElementById("number1").value);
    }
}
    function subtractQuantity2() {
        if (document.getElementById("number2").value > 0) {
            document.getElementById("number2").value--
            document.getElementById("subtotal2").innerHTML = "$" + (document.getElementById("number2").value * 3.29).toFixed(2)
            hideTotal()
            calculateSubtotal()
            calculateQST()
            calculateGST()
            updateTopBanner()
            localStorage.setItem(LocalStorageKeys.ITEM2_COUNT, document.getElementById("number2").value);
        }
    }
function subtractQuantity3() {
    if (document.getElementById("number3").value > 0) {
        document.getElementById("number3").value--
        document.getElementById("subtotal3").innerHTML = "$" + (document.getElementById("number3").value * 4.99).toFixed(2)
        hideTotal()
        calculateSubtotal()
        calculateQST()
        calculateGST()
        updateTopBanner()
        localStorage.setItem(LocalStorageKeys.ITEM3_COUNT, document.getElementById("number3").value);
    }
}
function subtractQuantity4() {
    if (document.getElementById("number4").value > 0) {
        document.getElementById("number4").value--
        document.getElementById("subtotal4").innerHTML = "$" + (document.getElementById("number4").value * 9.99).toFixed(2)
        hideTotal()
        calculateSubtotal()
        calculateQST()
        calculateGST()
        updateTopBanner()
        localStorage.setItem(LocalStorageKeys.ITEM4_COUNT, document.getElementById("number4").value);
    }
}


function calculateSubtotal(){

    document.getElementById("allSubtotal").innerHTML =  "$" + ((document.getElementById("number4").value * 9.99) + (document.getElementById("number3").value * 4.99) + (document.getElementById("number2").value * 3.29) + (document.getElementById("number1").value * 11.99)).toFixed(2)

}

function calculateQST(){

    document.getElementById("qst").innerHTML = "$" + (0.09975 * ((document.getElementById("number4").value * 9.99)+(document.getElementById("number3").value * 4.99) + (document.getElementById("number2").value * 3.29)+(document.getElementById("number1").value * 11.99))).toFixed(2)

}

function calculateGST(){

    document.getElementById("gst").innerHTML = "$" + (0.05 * ((document.getElementById("number4").value * 9.99)+(document.getElementById("number3").value * 4.99) + (document.getElementById("number2").value * 3.29)+(document.getElementById("number1").value * 11.99))).toFixed(2)

}

function calculateTotal(){

    document.getElementById("totalcost").innerHTML = "$" + (((document.getElementById("number4").value * 9.99) + (document.getElementById("number3").value * 4.99) + (document.getElementById("number2").value * 3.29) + (document.getElementById("number1").value * 11.99))

        +
        (0.09975 * ((document.getElementById("number4").value * 9.99)+(document.getElementById("number3").value * 4.99) + (document.getElementById("number2").value * 3.29)+(document.getElementById("number1").value * 11.99)))
        +
        (0.05 * ((document.getElementById("number4").value * 9.99)+(document.getElementById("number3").value * 4.99) + (document.getElementById("number2").value * 3.29)+(document.getElementById("number1").value * 11.99)))
    ).toFixed(2)}

function hideTotal(){
    document.getElementById("totalcost").innerHTML = ""
}

function removeItem1(){
    document.getElementById("number1").value = 0
    calculateSubtotal()
    calculateQST()
    calculateGST()
    calculateTotal()
    document.getElementById("delete1").parentElement.parentElement.style.display = 'none'
    hideTotal()
    updateTopBanner()
    localStorage.setItem(LocalStorageKeys.ITEM1_DELETED, "true");
}

function removeItem2(){
    document.getElementById("number2").value = 0
    calculateSubtotal()
    calculateQST()
    calculateGST()
    document.getElementById("delete2").parentElement.parentElement.style.display = 'none'
    hideTotal()
    updateTopBanner()
    localStorage.setItem(LocalStorageKeys.ITEM2_DELETED, "true");
}

function removeItem3(){
    document.getElementById("number3").value = 0
    calculateSubtotal()
    calculateQST()
    calculateGST()
    document.getElementById("delete3").parentElement.style.display = 'none'
    hideTotal()
    updateTopBanner()
    localStorage.setItem(LocalStorageKeys.ITEM3_DELETED, "true");
}

function removeItem4(){
    document.getElementById("number4").value = 0
    calculateSubtotal()
    calculateQST()
    calculateGST()
    document.getElementById("delete4").parentElement.parentElement.style.display = 'none'
    hideTotal()
    updateTopBanner()
    localStorage.setItem(LocalStorageKeys.ITEM4_DELETED, "true");
}

function updateTopBanner(){
    document.getElementById("shoppingCartNbr").innerHTML = "Shopping Cart (" + ((document.getElementById("number1").value*1) + (document.getElementById("number2").value*1) + (document.getElementById("number3").value*1) + (document.getElementById("number4").value*1)) +")"
}

const LocalStorageKeys = {
    CART_ITEM_COUNT: "cart-item-count",
    ITEM1_COUNT: "item1-count",
    ITEM2_COUNT: "item2-count",
    ITEM3_COUNT: "item3-count",
    ITEM4_COUNT: "item4-count",
    ITEM1_DELETED: "item1-deleted",
    ITEM2_DELETED: "item2-deleted",
    ITEM3_DELETED: "item3-deleted",
    ITEM4_DELETED: "item4-deleted"
};

function remember() {
    if (localStorage.getItem(LocalStorageKeys.ITEM1_COUNT))
        document.getElementById("number1").value = localStorage.getItem(LocalStorageKeys.ITEM1_COUNT);
    else
        localStorage.setItem(LocalStorageKeys.ITEM1_COUNT, document.getElementById("number1").value);
    if (localStorage.getItem(LocalStorageKeys.ITEM2_COUNT))
        document.getElementById("number2").value = localStorage.getItem(LocalStorageKeys.ITEM2_COUNT);
    else
        localStorage.setItem(LocalStorageKeys.ITEM2_COUNT, document.getElementById("number2").value);
    if (localStorage.getItem(LocalStorageKeys.ITEM3_COUNT))
        document.getElementById("number3").value = localStorage.getItem(LocalStorageKeys.ITEM3_COUNT);
    else
        localStorage.setItem(LocalStorageKeys.ITEM3_COUNT, document.getElementById("number3").value);
    if (localStorage.getItem(LocalStorageKeys.ITEM4_COUNT))
        document.getElementById("number4").value = localStorage.getItem(LocalStorageKeys.ITEM4_COUNT);
    else
        localStorage.setItem(LocalStorageKeys.ITEM4_COUNT, document.getElementById("number4").value);

    if (localStorage.getItem(LocalStorageKeys.CART_ITEM_COUNT)) {
        document.getElementById("shoppingCartNbr").innerHTML = localStorage.getItem(LocalStorageKeys.CART_ITEM_COUNT);
    }
    else {
        localStorage.setItem(LocalStorageKeys.CART_ITEM_COUNT, "4");
    }
    if (localStorage.getItem(LocalStorageKeys.ITEM1_DELETED)) {
        if (localStorage.getItem(LocalStorageKeys.ITEM1_DELETED) === "true") {
            removeItem1();
        }
    }
    if (localStorage.getItem(LocalStorageKeys.ITEM2_DELETED)) {
        if (localStorage.getItem(LocalStorageKeys.ITEM2_DELETED) === "true") {
            removeItem2();
        }
    }
    if (localStorage.getItem(LocalStorageKeys.ITEM3_DELETED)) {
        if (localStorage.getItem(LocalStorageKeys.ITEM3_DELETED) === "true") {
            removeItem3();
        }
    }
    if (localStorage.getItem(LocalStorageKeys.ITEM4_DELETED)) {
        if (localStorage.getItem(LocalStorageKeys.ITEM4_DELETED) === "true") {
            removeItem4();
        }
    }
    
    hideTotal();
    calculateSubtotal();
    calculateQST();
    calculateGST();
    updateTopBanner();
}