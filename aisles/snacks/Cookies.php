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

    <div class="grid-container">

        <div class="grid-item">
            <div class="col">
                <div class="cookie-options">
                    <h3>Select one of our delicious cookie options</h3>
                    <button class="cookie-button" id="button1">Chocolate</button>
                    <button class="cookie-button" id="button2">Peanut Butter</button>
                    <button class="cookie-button" id="button3">Salted Caramel</button>
                </div>
                <img src="../../images/snacks/Chocolate%20cookies.jpg" alt="Cookies image"> <!-- default image -->
            </div>
        </div>

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


    </div>
</div>
<?php require "../../common/footer.php"; ?>
</body>


</html>