<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="../../favicon.ico">
    <meta name="author" content="Felix Beaulieu"> <!-- Buttons (WP2) added by Kyle -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Cherries | Fruits & Vegetables | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/p3.css"/>
    <script src="../../scripts/aisles/fruitveg-cherries.js"></script>
</head>

<body onload="remember();">
<?php require_once "../../common/header.php"; ?>
<ul class="breadcrumb">
    <li><a href="../../index.php">Store</a></li>
    <li><a href="../index.php">Aisles</a></li>
    <li><a href="fruit-veg.php">Fruits & Vegetables</a></li>
    <li>Cherries</li>
</ul>
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
                <br/><br/>
                Product of Mexico.
                <br/> <br/>

                <form action="../../scripts/addtocart.php" id="cart" method="post">

                <input type="hidden" name="id" value="408731" form="cart">
                <input type="hidden" name="prodName" value="Cherries" form="cart">
                <input type="hidden" name="aisle" value="Fruits &amp;amp; Vegetables" form="cart">
                <input type="hidden" name="origin" value="Mexico" form="cart"/>
                <input type="hidden" name="price" value="4.99" form="cart"/>
                <input type="hidden" name="discount" value="false" form="cart"/>
                <input type="hidden" name="description" value="Organic Cherries from Mexico. Grown on a sustainable and fair trade certified farm.
                Check out our recipes to see what delicious meals and desserts you can make with cherries." form="cart" />


                <label for="type">Type:</label> <br/>
                <div class="type">

                    <input form="cart" type="radio" class="cherryTypeButton" id="bing" name="cherryType" value="bing"
                            onclick="setSelected(this, '../../images/fruit-veg/bing-cherry.jpg')" checked>
                    <label for="bing">Bing</label>
                    <br />
                    <input form="cart" type="radio" class="cherryTypeButton" id="rainier" name="cherryType" value="rainier"
                            onclick="setSelected(this, '../../images/fruit-veg/rainier-cherry.jpg')">
                    <label for="rainier">Rainier</label>
                    <br />
                    <input form="cart" type="radio" class="cherryTypeButton" id="tartarian" name="cherryType" value="tartarian"
                            onclick="setSelected(this, '../../images/fruit-veg/tartarian-cherry.jpg')">
                    <label for="tartarian">Black Tartarian</label>
                    <br />
                </div>
                <br/>
                <label for="type">Organic:</label> <br/>
                <div class="type">
                    <input form="cart" type="radio" class="cherryOrganicButton" id="organic" name="organic" value="true" onclick="setSelected(this)" checked>
                    <label for="organic">Organic</label>
                    <br />
                    <input form="cart" type="radio" class="cherryOrganicButton" id="regular" name="organic" value="false" onclick="setSelected(this)">
                    <label for="regular">Regular</label>
                    <br />
                </div>
                <br/>
                <label for="quantity">Quantity:</label> <br/>
                <div class="addtocart">
                    <button type="submit" onclick="addToCartAlert()" style="float:right">Add to Cart</button>
                    <button type="button" id="incr-item" onclick="quantityIncr()" style="float:right">+</button>
                    <button type="button" id="decr-item" onclick="quantityDecr()" style="float:left">-</button>
                    <input type="text" id="quantity" name="quantity" value="1" readonly>
                </div>
                </form>

                <br/><br/>

                <span class="original-price" style="text-decoration: none">Subtotal: </span>
                <span class="original-price" id="price" style="text-decoration: none">$4.99</span>


                <br/> <br/>

                <div class="detailed-description-button">
                    <button type="button" onclick="detailedDescription()">Detailed Description</button>
                </div>

                <div id="detailed-description" style="display: none;">
                    Organic Cherries from Mexico. Grown on a sustainable and fair trade certified farm.
                    Check out our <a href="../../recipes.php">recipes</a> to see what delicious meals and desserts you
                    can make with cherries.
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "../../common/footer.php"; ?>
</body>

</html>