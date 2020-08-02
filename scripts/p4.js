function subtractQuantity(){
    if (document.getElementById("number").value > 0)
    {document.getElementById("number").value--}

   /* document.getElementById("subtotal").innerHTML = "$" + (document.getElementById("number").value * document.getElementById("subtotal")).toFixed(2);*/
}

/*function addQuantity(){
    document.getElementById("number").value++
    document.getElementById("subtotal").innerHTML = "$" + (document.getElementById("number").value * document.getElementById("subtotal")).toFixed(2);
}*/

function checkOut(){
    alert("You have successfully completed your order. Your items will arrive in 2-3 business days. Thank you for shopping at Green Mart! See you again soon!");
}


function addQuantity1() {
    document.getElementById("number1").value++
    document.getElementById("subtotal1").innerHTML = "$" + (document.getElementById("number1").value * 11.99).toFixed(2)

}
function addQuantity2() {
    document.getElementById("number2").value++
    document.getElementById("subtotal2").innerHTML = "$" + (document.getElementById("number2").value * 3.29).toFixed(2)

}
function addQuantity3() {
    document.getElementById("number3").value++
    document.getElementById("subtotal3").innerHTML = "$" + (document.getElementById("number3").value * 4.99).toFixed(2)

}
function addQuantity4() {
    document.getElementById("number4").value++
    document.getElementById("subtotal4").innerHTML = "$" + (document.getElementById("number4").value * 9.99).toFixed(2)
}

function subtractQuantity1() {
    if (document.getElementById("number1").value > 0) {
        document.getElementById("number1").value--
        document.getElementById("subtotal1").innerHTML = "$" + (document.getElementById("number1").value * 11.99).toFixed(2)

    }
}
    function subtractQuantity2() {
        if (document.getElementById("number2").value > 0) {
            document.getElementById("number2").value--
            document.getElementById("subtotal2").innerHTML = "$" + (document.getElementById("number2").value * 3.29).toFixed(2)

        }
    }
function subtractQuantity3() {
    if (document.getElementById("number3").value > 0) {
        document.getElementById("number3").value--
        document.getElementById("subtotal3").innerHTML = "$" + (document.getElementById("number3").value * 4.99).toFixed(2)


    }
}
function subtractQuantity4() {
    if (document.getElementById("number4").value > 0) {
        document.getElementById("number4").value--
        document.getElementById("subtotal4").innerHTML = "$" + (document.getElementById("number4").value * 9.99).toFixed(2)
    }
}