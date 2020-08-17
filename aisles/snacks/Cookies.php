<!DOCTYPE html>
<html lang="en">


<head>

    <link rel="shortcut icon" href="../../favicon.ico">
    <meta name="author" content="Laura Boivin">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta charset="UTF-8">
    <title>Vegan Fairtrade Cookies | Snacks | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/p3.css"/>
    <script src="../../scripts/aisles/cookie.js" async></script>
</head>

<body onload="remember();">
<?php require_once "../../common/header.php"; ?>
<ul class="breadcrumb">
    <li><a href="../../index.php">Store</a></li>
    <li><a href="../index.php">Aisles</a></li>
    <li><a href="snacks.php">Snacks</a></li>
    <li>Cookies</li>
</ul>
<div class="main">
<form action="../../scripts/addtocart.php" id="cart" method="post">
    <div class="grid-container">

        <div class="grid-item">
            <div class="col">
                <div class="cookie-options">
                    <h3>Select one of our delicious cookie options</h3>
                    <input type="radio" name="cookieType" value="chocolate" class="cookie-button" id="button1" checked>
                    <label for="button1">Chocolate</label> <br>
                    <input type="radio" name="cookieType" value="peanut" class="cookie-button" id="button2">
                    <label for="button2">Peanut Butter</label> <br>
                    <input type="radio" name="cookieType" value="caramel" class="cookie-button" id="button3">
                    <label for="button3">Salted Caramel</label><br>
                </div>
                <img src="../../images/snacks/Chocolate%20cookies.jpg" alt="Cookies image"> <!-- default image -->
            </div>
        </div>

        <input type="hidden" name="image" value="images/snacks/Chocolate%20cookies.jpg" form="cart">
        <input type="hidden" name="id" value="003429" form="cart">
        <input type="hidden" name="prodName" value="Cookies" form="cart">
        <input type="hidden" name="aisle" value="Snacks" form="cart">
        <input type="hidden" name="origin" value="Canada" form="cart"/>
        <input type="hidden" name="price" value="4.99" form="cart"/>
        <input type="hidden" name="discount" value="false" form="cart"/>
        <input type="hidden" name="description" value="These vegan fairtrade cookies are a baker's masterpiece. <br><br>
                    This snack is delicious, moist and melts
                    in your mouth. At every step of production,
                    all workers are well compensated for their work and all
                    our ingredients are ethically sourced, as they should be." form="cart" />

        <div class="grid-item">
            <div class="col">
                <h2>Vegan Fairtrade Cookies</h2>
                <span class="price">$4.99/ea</span><br/>

                <br/>
                Product of Canada. <br/> <br/>
                <div class="cookie-addToCart">
                    <label for="cookquantity">Quantity:</label> <br/> <br/>
                    <button type="submit" style="float:right" id="cookcartbutton" onclick="addToCart()">Add to Cart
                    </button>
                    <button id="subtract" onclick="subtractQuantity()">-</button>
                    <input type="text" value=1 id="cookquantity" name="quantity" readonly>
                    <button id="add" onclick="addQuantity()">+</button>
                    <br/> <br/>
                    <label id="total">Subtotal:</label>
                    <span id="subtotal"> $4.99 </span>
                </div>
                <br/> <br/>

                <p id="description">These vegan fairtrade cookies are a baker's masterpiece. <br><br>
                    This snack is delicious, moist and melts
                    in your mouth. At every step of production,
                    all workers are well compensated for their work and all
                    our ingredients are ethically sourced, as they should be. </p>
                <a id="details">More Description</a>
            </div>
        </div>
</form>

    </div>
</div>
<?php require "../../common/footer.php"; ?>
</body>


</html>