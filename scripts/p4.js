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
}
function addQuantity2() {
    document.getElementById("number2").value++
    document.getElementById("subtotal2").innerHTML = "$" + (document.getElementById("number2").value * 3.29).toFixed(2)
    hideTotal()
    calculateSubtotal()
    calculateQST()
    calculateGST()
}
function addQuantity3() {
    document.getElementById("number3").value++
    document.getElementById("subtotal3").innerHTML = "$" + (document.getElementById("number3").value * 4.99).toFixed(2)
    hideTotal()
    calculateSubtotal()
    calculateQST()
    calculateGST()
}
function addQuantity4() {
    document.getElementById("number4").value++
    document.getElementById("subtotal4").innerHTML = "$" + (document.getElementById("number4").value * 9.99).toFixed(2)
    hideTotal()
    calculateSubtotal()
    calculateQST()
    calculateGST()
}

function subtractQuantity1() {
    if (document.getElementById("number1").value > 0) {
        document.getElementById("number1").value--
        document.getElementById("subtotal1").innerHTML = "$" + (document.getElementById("number1").value * 11.99).toFixed(2)
        hideTotal()
        calculateSubtotal()
        calculateQST()
        calculateGST()
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
}

function removeItem2(){
    document.getElementById("number2").value = 0
    calculateSubtotal()
    calculateQST()
    calculateGST()
    document.getElementById("delete2").parentElement.parentElement.style.display = 'none'
    hideTotal()
}

function removeItem3(){
    document.getElementById("number3").value = 0
    calculateSubtotal()
    calculateQST()
    calculateGST()
    document.getElementById("delete3").parentElement.style.display = 'none'
    hideTotal()
}

function removeItem4(){
    document.getElementById("number4").value = 0
    calculateSubtotal()
    calculateQST()
    calculateGST()
    document.getElementById("delete4").parentElement.parentElement.style.display = 'none'
    hideTotal()
}