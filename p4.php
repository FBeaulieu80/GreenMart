<!DOCTYPE html>
<html long = "en">

<head>
    <meta name="author" content="Laura Boivin">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/p4.css">
    <script src = "scripts/p4.js" async></script>
    <title>Shopping Cart (4) | Green Mart</title>
</head>

<body marginwidth="100%">
<?php require "common/header.php"; ?>
<div class="main">
    <div class="grid-container">
        <div class="grid-item">
            <div class = "col">

                <form action = "aisles/index.php">
                <button class = "continue" >Continue Shopping</button>
                </form>

                <h1 align="center" >My Shopping Cart</h1>



<table align="center" cellspacing="20" >

        <tr valign="top" id = "checkout">
            <th >

                <br>
                <button onclick = "checkOut()"> Checkout Now</button>
                <h3> Order Summary</h3>

                <span id = "orderTitle">Subtotal:</span>
                <span id = "amount">$11.95</span><br>

                <span id = "orderTitle">QST:</span>
                <span id = "amount">$1.19</span><br>

                <span id = "orderTitle">GST:</span>
                <span id = "amount">$0.60</span><br><br>

                <span id = "orderTitle">Total:</span>
                <span id = "amount">$13.74</span><br><br>

            </th>
        </tr>

    <tr valign="top" id = "itemBlock" >
        <th class = "img-with-text">

            <h3>Carrot Cake</h3>
            <img id = "food" src="images/bakery/carrot-cake.jpg" alt = "Carrot Cake"><br><br>
            <span id = "subtotal"  > $11.99 </span><br><br>
            <button id = "add" onclick = "addQuantity()">+</button>
            <form action = ""></form>
            <input type = "text" value = 1 id = "number" readonly>
            <button id = "subtract" onclick = "subtractQuantity()">-</button><br/>
            <button id = "delete" onclick ="parentElement.remove()">Remove Item </button><br><br>

        </th>
    </tr>

    <tr valign="top">
        <th class = "img-with-text">

            <h3>Cheddar Cheese</h3>
            <img id = "food" src="images/dairy-eggs/cheddar.jpg" alt = "Cheddar Cheese"><br><br>
            <span id = "subtotal"  > $3.29 </span><br><br>
            <button id = "add" onclick = "addQuantity()">+</button>
            <form action = ""></form>
            <input type = "text" value = 1 id = "number" readonly>
            <button id = "subtract" onclick = "subtractQuantity()">-</button><br/>
            <button id = "delete" onclick ="parentElement.remove()">Remove Item</button><br><br>

        </th>
    </tr>


    <tr valign="top">
        <th class="img-with-text">

            <h3>Rainer Cherries</h3>
            <img id = "food" src="images/fruit-veg/rainier-cherry.jpg" alt="Rainer Cherries"><br><br>
            <span id = "subtotal"  > $4.99 </span><br><br>
            <button id = "add" onclick = "addQuantity()">+</button>
            <form action=""></form>
            <input type = "text" value = 1 id = "number" readonly>
            <button id = "subtract" onclick = "subtractQuantity()">-</button>
            <br/>
            <button id="delete" onclick ="parentElement.remove()">Remove Item</button><br><br>
        </th>
    </tr>

    <tr valign="top">
        <th class="img-with-text">

            <h3>Roast Chicken</h3>
            <img id = "food" src="images/meat/chicken.jpg" alt="Roast Chicken"><br><br>
            <span id = "subtotal"  > $9.99 </span><br><br>
            <button id = "add" onclick = "addQuantity()">+</button>
            <form action=""></form>
            <input type = "text" value = 1 id = "number" readonly>
            <button id = "subtract" onclick = "subtractQuantity()">-</button>
            <br/>
            <button id="delete" onclick ="parentElement.remove()">Remove Item</button><br><br>
        </th>
    </tr>

</table>
            </div>
        </div>
    </div>
</div>


<?php require "../../common/footer.php"; ?>
</body>
</html>
