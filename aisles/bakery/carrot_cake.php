<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Michael">
    <meta charset="UTF-8">
    <title>Carrot Cake | Bakery | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../../css/p3.css" />
</head>
<body>
<?php require_once "../../common/header.php"; ?>
<div class="main">
    <div class="grid-container">
        <div class="grid-item">
            <img src="../../images/bakery/carrot-cake.jpg" alt="Carrot Cake">
        </div>
        <div class="grid-item">
            <h2>Carrot Cake</h2>
            <span class="price">$11.99</span><br />
            <br />
            Product of Australia. <br /> <br />
            <div class="addtocart">
                <form action="/action_page.php">
                    <label for="quantity">Quantity:</label> <br />
                    <button type="submit" style="float:right">Add to Cart</button>
                    <input type="text" id="quantity" name="quantity" value="1">
                </form>
            </div>
            <br /> <br />
            <h3>Description</h3> <!-- Change description below -->
            <p>Carrot cake is cake that contains carrots mixed into the batter. Most modern carrot cake recipes have a white cream cheese frosting.</p>
        </div>
    </div>
</div>
<?php require "../../common/footer.html" ?>
</body>
</html>