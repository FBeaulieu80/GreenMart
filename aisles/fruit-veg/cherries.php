<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="Felix Beaulieu"> <!-- Buttons (WP2) added by Kyle -->
    <meta charset="UTF-8">
    <title>Cherries | Fruits & Vegetables | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../../css/p3.css" />
</head>

<body>
<?php require_once "../../common/header.php"; ?>
<div class="main">

    <div class="grid-container">
        <div class="grid-item">
            <img id="cherry-image" src="../../images/fruit-veg/bing-cherry.jpg" alt="Cherries">
        </div>
        <div class="grid-item">
            <h2>Cherries</h2>
            <span class="original-price" style="text-decoration: none">$4.99/lb</span>
            <br /><br />
            Product of Mexico.
            <br /> <br />

            <label for="type">Type:</label> <br />
            <div class="type">
                <button type="button" id="bing" onclick="bing()">Bing</button>
                <button type="button" id="rainier" onclick="rainier()">Rainier</button>
                <button type="button" id="tartarian" onclick="tartarian()">Black Tartarian</button>
            </div>
            <br />
            <label for="type">Organic:</label> <br />
            <div class="type">
                <button type="button" id="organic" onclick="organic()">Organic</button>
                <button type="button" id="regular" onclick="regular()">Regular</button>
            </div>
            <br />
            <label for="quantity">Quantity:</label> <br />
            <div class="addtocart">
                <form action="/action_page.php">
                    <button type="submit" style="float:right">Add to Cart</button>
                    <button type="button" id="incr-item" onclick="quantity.value++" style="float:right">+</button>
                    <button type="button" id="decr-item" onclick="quantity.value--" style="float:left">-</button>
                    <input type="text" id="quantity" name="quantity" value="1">
                </form>
            </div>

            <br /> <br />
            <div class="detailed-description-button">
            <button type="button" onclick="detailedDescription()">Detailed Description</button>
            </div>
            <div id="detailed-description">
                Organic Cherries from Mexico. Grown on a sustainable and fair trade certified farm.
                Check out our <a href="../../recipes.php">recipes</a> to see what delicious meals and desserts you can make with cherries.
            </div>

        </div>
    </div>
</div>
<script src="../../js/cherries.js"></script>
<?php require "../../common/footer.html"; ?>
</body>

</html>