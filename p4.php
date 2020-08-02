<!DOCTYPE html>
<html long = "en">

<head>
    <meta name="author" content="Laura Boivin">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/p4.css">
    <script type="text/javascript" src="scripts/p4.js"></script>
    <title>Shopping Cart (4) | Green Mart</title>
</head>


<body marginwidth="100%">
<?php require "common/header.php"; ?>

<button class = "continue">Continue Shopping</button>
<h1 align="center" >My Shopping Cart</h1>
<table align="center" cellspacing="20" >
    <tr valign="top">
        <th class = "img-with-text">
            <h2>Carrot Cake</h2>
            <img id = "food" src="images/bakery/carrot-cake.jpg"
                 alt = "Carrot Cake">
            <p>$11.99</p>
            <button class = "add">+</button>
            <form action = ""></form>
            <input type = "text" value = 1 id = "number" readonly>
            <button class = "subtract">-</button><br/>
            <button class = "delete">Remove Item </button>
        </th>
        <th class = "checkout">   <button onclick="checkout()"> Checkout Now</button>
            <h3> Order Summary</h3>
            <h4>4 Products </h4><br/>
            <table>
                <tr>
                    <th>
                        Subtotal:
                    </th>
                    <td>$11.95</td>
                </tr>
                <tr>
                    <th>QST:</th>
                    <td>$1.19</td>
                </tr>
                <tr>
                    <th>GST:</th>
                    <td>$0.60</td>
                </tr>
                <tr>
                    <th>Total:</th>
                    <td >$13.74</td>
                </tr>
            </table>
    </tr>

    <tr valign="top">
        <th class = "img-with-text">
            <h2>Cheddar Cheese</h2>
            <img id = "food" src="images/dairy-eggs/cheddar.jpg"
                 alt = "Cheddar Cheese">
            <p>$3.29</p>
            <button class = "add">+</button>
            <form action = ""></form>
            <input type = "text" value = 1 id = "number" readonly>
            <button class = "subtract">-</button><br/>
            <button class = "delete">Remove Item</button>
        </th>
    </tr>

    <tr valign="top">
        <th class="img-with-text">
            <h2>Rainer Cherries</h2>
            <img id = "food" src="images/fruit-veg/rainier-cherry.jpg"
                 alt="Rainer Cherries">
            <p>$4.99</p>
            <button class="add">+</button>
            <form action=""></form>
            <input type = "text" value = 1 id = "number" readonly>
            <button class="subtract">-</button>
            <br/>
            <button class="delete">Remove Item</button>
        </th>

        <th class="img-with-text">
            <h2>Roast Chicken</h2>
            <img id = "food" src="images/meat/chicken.jpg"
                 alt="Roast Chicken">
            <p>$9.99</p>
            <button class="add">+</button>
            <form action=""></form>
            <input type = "text" value = 1 id = "number" readonly>
            <button class="subtract">-</button>
            <br/>
            <button class="delete">Remove Item</button>
        </th>
    </tr>
</table>
<?php //require "common/footer.php"; ?>
</body>

</html>
