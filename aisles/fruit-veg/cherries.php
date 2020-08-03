<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="Felix Beaulieu"> <!-- Buttons (WP2) added by Kyle -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Cherries | Fruits & Vegetables | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../../css/p3.css" />
    <script src="../../scripts/aisles/fruitveg-cherries.js"></script>
</head>

<body onload="remember();">
<?php require_once "../../common/header.php"; ?>
<div class="main">

    <div class="grid-container">
        <div class="grid-item">
            <div class="col">
            <img id="cherry-image" src="../../images/fruit-veg/bing-cherry.jpg" alt="Cherries">
            </div>
        </div>
        <div class="grid-item">
            <div class="col">
            <h2>Cherries</h2>
                <span class="original-price" style="text-decoration: none">$4.99/lb</span>
            <br /><br />
            Product of Mexico.
            <br /> <br />

            <label for="type">Type:</label> <br />
            <div class="type">
                <button type="button" class="cherryTypeButton" id="bing" onclick="setSelected(this, '../../images/fruit-veg/bing-cherry.jpg')">Bing</button>
                <button type="button" class="cherryTypeButton" id="rainier" onclick="setSelected(this, '../../images/fruit-veg/rainier-cherry.jpg')">Rainier</button>
                <button type="button" class="cherryTypeButton" id="tartarian" onclick="setSelected(this, '../../images/fruit-veg/tartarian-cherry.jpg')">Black Tartarian</button>
            </div>
            <br />
            <label for="type">Organic:</label> <br />
            <div class="type">
                <button type="button" class="cherryOrganicButton" id="organic" onclick="setSelected(this)">Organic</button>
                <button type="button" class="cherryOrganicButton" id="regular" onclick="setSelected(this)">Regular</button>
            </div>
            <br />
            <label for="quantity">Quantity:</label> <br />
            <div class="addtocart">
                <form action="">
                    <button type="button" onclick="addToCartAlert()" style="float:right">Add to Cart</button>
                    <button type="button" id="incr-item" onclick="quantityIncr()" style="float:right">+</button>
                    <button type="button" id="decr-item" onclick="quantityDecr()" style="float:left">-</button>
                    <input type="text" id="quantity" name="quantity" value="1" readonly>
                </form>
            </div>

            <br /><br />

            <span class="original-price" style="text-decoration: none">Subtotal: </span>
            <span class="original-price" id="price" style="text-decoration: none">$4.99</span>

            <br /> <br />

            <div class="detailed-description-button">
            <button type="button" onclick="detailedDescription()">Detailed Description</button>
            </div>
            <div id="detailed-description" style="display: none;">
                Organic Cherries from Mexico. Grown on a sustainable and fair trade certified farm.
                Check out our <a href="../../recipes.php">recipes</a> to see what delicious meals and desserts you can make with cherries.
            </div>
            </div>
        </div>
    </div>
</div>

<?php require "../../common/footer.php"; ?>
</body>

</html>