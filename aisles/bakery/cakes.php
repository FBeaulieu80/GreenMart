<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="shortcut icon" href="../../favicon.ico">
    <meta name="author" content="Michael Rowe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Cakes | Bakery | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/p3.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/p3_cakes.css"/>
    <script type="text/javascript" src="../../scripts/aisles/bakery.js"></script>

</head>
<body onload="remember();">
<?php require_once "../../common/header.php"; ?>
<ul class="breadcrumb">
    <li><a href="../../index.php">Store</a></li>
    <li><a href="../index.php">Aisles</a></li>
    <li><a href="bakery.php">Bakery</a></li>
    <li>Cakes</li>
</ul>
<div class="main">
    <div class="grid-container">
        <div class="grid-item" id="image">
            <img src="../../images/bakery/carrot-cake.jpg" alt="Carrot Cake">
        </div>
        <div class="grid-item">
            <div class="productInfo">
                <h2>Cakes</h2>
                <div>&dollar;<span id="cakePrice" class="price"></span>/ea</div>
                <div id="productOrigin"></div>

                <div class="typeSelection">
                    <input type="radio" name="cakeType" value="carrot" form="cart" class="productPageButton" onclick="chooseCake(CakeTypes.CARROT)" checked>
                    <label for="carrot">Carrot</label>
                    <input type="radio" name="cakeType" value="cheese" form="cart" class="productPageButton" onclick="chooseCake(CakeTypes.CHEESE)">
                    <label for="cheese">Cheese</label>
                    <input type="radio" name="cakeType" value="chocolate" form="cart"class="productPageButton" onclick="chooseCake(CakeTypes.CHOCOLATE)">
                    <label for="chocolate">Chocolate</label>
                </div>

                <div class="addtocart">
                    <form action="../../scripts/addtocart.php" id="cart" method="post">

                    <input type="hidden" name="id" value="887325" form="cart">
                    <input type="hidden" name="image" value="images/bakery/carrot-cake.jpg" form="cart">
                    <input type="hidden" name="prodName" value="Cakes" form="cart">
                    <input type="hidden" name="aisle" value="Bakery" form="cart">
                    <input type="hidden" name="origin" value="Australia" form="cart"/>
                    <input type="hidden" name="price" value="11.99" form="cart"/>
                    <input type="hidden" name="discount" value="false" form="cart"/>
                    <input type="hidden" name="description" value="Carrot cake is cake that contains carrots mixed into the batter. Most modern carrot cake recipes have a white cream cheese frosting." form="cart" />

                        <label for="quantity">Quantity:</label>
                        <input type="button" value="-" class="plusMinusButton productPageButton" id="minusButton"
                               onclick="let q = document.getElementById('quantity'); q.value -= (q.value > q.min)? 1:0;updateSubtotal();">
                        <input type="number" id="quantity" name="quantity" value="1" min="1"
                               onchange="updateSubtotal();">
                        <input type="button" value="+" class="plusMinusButton productPageButton" id="plusButton"
                               onclick="document.getElementById('quantity').value++;updateSubtotal();">
                        <input type="submit" class="productPageButton" value="Add to Cart">
                    </form>
                </div>
                <div>Subtotal:&dollar;<span id="subtotal"></span></div>
            </div>
        </div>
        <div id="descriptionArea">
            <button class="accordion" onclick="toggleAccordion();">Description</button>
            <p class="panel" id="description"></p>
        </div>
    </div>
</div>
<?php require "../../common/footer.php" ?>
</body>
</html>