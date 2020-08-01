/* variables for the cookie types & image change */
    var img = document.querySelector(".grid-item img")
    var button1 = document.querySelector("#button1")
    var button2 = document.querySelector("#button2")
    var button3 = document.querySelector("#button3")

/* code for the cookie types & image change */
    button1.addEventListener("click", () => {
        img.src = "../../images/snacks/Chocolate%20cookies.jpg"
    })

    button2.addEventListener("click", () => {
        img.src = "../../images/snacks/peanut-butter-1164861_1920.jpg"
    })

    button3.addEventListener("click", () => {
        img.src = "../../images/snacks/spice-643848_1920.jpg"
    })

/* variables for the description detail button */
    var description = document.getElementById("description")
    var button4 = document.getElementById("details")

/* code for the description detail button */
    button4.onclick = function () {
        if (description.className == "open") {
            // shrink the box
            description.className = ""
            button4.innerHTML = "More Details"
        } else {
            //expand the box
            description.className = "open"
            button4.innerHTML = "Fewer Details"
        }
    }

/* code for the cookie increment & decrementing*/

    function subtractQuantity(){
        if (document.getElementById("cookquantity").value > 0)
        {document.getElementById("cookquantity").value--}

        document.getElementById("subtotal").innerHTML = "$" + (document.getElementById("cookquantity").value * 4.99).toFixed(2)
    }

    function addQuantity(){
        document.getElementById("cookquantity").value++
        document.getElementById("subtotal").innerHTML = "$" + (document.getElementById("cookquantity").value * 4.99).toFixed(2)
    }

    function addToCart(){
        alert("Your items have been added to your cart!");
    }

