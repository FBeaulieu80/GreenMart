<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="../../favicon.ico">
    <meta name="author" content="Michael Rowe">
    <meta charset="UTF-8">
    <title>Chicken | Meat | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/p3.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/p3_chicken.css"/>
    <script type="text/javascript" src="../../scripts/aisles/meat.js"></script>
</head>

<body onload="refresh()">
<?php require_once "../../common/header.php"; ?>
<ul class="breadcrumb">
    <li><a href="../../index.php">Store</a></li>
    <li><a href="../index.php">Aisles</a></li>
    <li><a href="meat.php">Meat</a></li>
    <li>Roast Chicken</li>
</ul>
<div>
    <br><br><br>
    <div class="grid">
        <div class="grid-item" id="image">
            <img src="../../images/meat/chicken-whole.jpg" alt="Chicken Whole">
        </div>
        <div class="grid-item">
            <h2>Chicken</h2>
            <div id="price" class="price"></div>
            <div id="location"></div>
            <form action="../../scripts/addtocart.php" id="cart" method="post">
            <div>
                <h3>Cut</h3>
<!--                <button class="cutCook" id="whole" onclick="whole()">Whole</button>-->
<!--                <button class="cutCook" id="breast" onclick="breast()">Breast</button>-->
<!--                <button class="cutCook" id="leg" onclick="leg()">Leg</button>-->
                <input type="radio" name="chickenCut" class="cutCook" id="whole" onclick="whole()" checked>
                <label for="whole">Whole</label>
                <input type="radio" name="chickenCut" class="cutCook" id="breast" onclick="breast()">
                <label for="breast">Breast</label>
                <input type="radio" name="chickenCut" class="cutCook" id="leg" onclick="leg()">
                <label for="leg">Leg</label>
            </div>

            <div>
                <h3>Cook Method</h3>
<!--                <button class="cutCook" name="cook" value="grilled" id="grilled" onclick="grilled()">Grilled</button>-->
<!--                <button class="cutCook" name="cook" value="roasted" id="roasted" onclick="roasted()">Roasted</button>-->
                <input type="radio" class="cutCook" name="cookMethod" value="grilled" id="grilled" onclick="grilled()" checked>
                <label for="grilled">Grilled</label>
                <input type="radio" class="cutCook" name="cookMethod" value="roasted" id="roasted" onclick="roasted()">
                <label for="roasted">Roasted</label>
        </div>
            <br><br><br>

            <div class="addtocart">

                <button type="submit" value="Add to Cart" onclick="notification()">Add to Cart</button>
                    <button type="button" id="incr-item" onclick="add()" style="float:right">+</button>
                    <button type="button" id="decr-item" onclick="subtract()" style="float:left">-</button>
                    <label><input type="number" id="quantity" name="quantity" value="0" min="0" size="5"
                                                 onchange="sessionStorage.setItem('quantity', this.value);"></label>
                </form>
            </div>

            <input type="hidden" name="id" value="543634" form="cart">
            <input type="hidden" name="image" value="images/meat/chicken-whole.jpg" form="cart">
            <input type="hidden" name="prodName" value="Chicken" form="cart">
            <input type="hidden" name="aisle" value="Meat" form="cart">
            <input type="hidden" name="origin" value="Alberta" form="cart"/>
            <input type="hidden" name="price" value="9.99" form="cart"/>
            <input type="hidden" name="discount" value="false" form="cart"/>
            <input type="hidden" name="description" value=description form="cart" />
            <input type="hidden" name="cook" value=description form="cart" />

            <span class="sub">
                <span class="original-price" style="text-decoration: none">Total (tax not included): </span>
                <span class="original-price" id="current-price" style="text-decoration: none">$0.00</span>
            </span>

        </div>
    </div>
    <div id="showDesc">
        <button class="toggleDesc" id="toggleDesc" onclick="showDesc();">Description</button>
        <p class="descButton" id="descButton"></p>
    </div>
</div>
<?php require "../../common/footer.php"; ?>
</body>

</html>
