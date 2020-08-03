<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="Michael Rowe">
    <meta charset="UTF-8">
    <title>Chicken | Meat | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../../css/p3.css" />
    <link rel="stylesheet" type="text/css" href="../../css/p3_chicken.css"/>
    <script type="text/javascript" src="../../scripts/aisles/meat.js"></script>
</head>

<body onload="refresh()">
<?php require_once "../../common/header.php"; ?>
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

            <div>
                <h3>Cut</h3>
                <button class="cutCook" id="whole" onclick="whole()">Whole</button>
                <button class="cutCook" id="breast" onclick="breast()">Breast</button>
                <button class="cutCook" id="leg" onclick="leg()">Leg</button>
            </div>

            <div>
                <h3>Cook Method</h3>
                <button class="cutCook" name="cook" value="grilled" id="grilled" onclick="grilled()">Grilled</button>
                <button class="cutCook" name="cook" value="roasted" id="roasted" onclick="roasted()">Roasted</button>
            </div>
            <br><br><br>

            <div class="addtocart">
                <form action="">
                    <button type="button" onclick="notification()">Add to Cart</button>
                    <button type="button" id="incr-item" onclick="add()" style="float:right">+</button>
                    <button type="button" id="decr-item" onclick="subtract()" style="float:left">-</button>
                    <input type="number" id="quantity" name="quantity" value="0" min="0" size="5" onchange="sessionStorage.setItem('quantity', this.value);">
                </form>
            </div>

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
