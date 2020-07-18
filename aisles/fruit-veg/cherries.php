<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="Felix Beaulieu">
    <meta charset="UTF-8">
    <title>Cherries | Fruit & Veg | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../../css/p3.css" />
</head>

<body>
<?php require_once "../../common/header.php"; ?>
<div class="main">

    <div class="grid-container">
        <div class="grid-item">
            <img src="../../images/fruit-veg/cherries.jpg" alt="Cherries">
        </div>
        <div class="grid-item">
            <h2>Cherries</h2>
            <span class="original-price" style="text-decoration: none">$4.99/lb</span>
            <br /><br />
            Product of Mexico. <br /> <br />
            <div class="addtocart">
                <form action="/action_page.php">
                    <label for="quantity">Quantity:</label> <br />
                    <button type="submit" style="float:right">Add to Cart</button>
                    <input type="text" id="quantity" name="quantity" value="1">
                </form>
            </div>
            <br /> <br />
            <h3>Description</h3>
            <p>Organic Cherries from Mexico. Grown on a sustainable and fair trade certified farm.
                Check out our <a href="../../recipes">recipes</a> to see what delicious meals and desserts you can
                make with cherries.</p>
        </div>
    </div>
</div>
<?php require "../../common/footer.html"; ?>
</body>

</html>