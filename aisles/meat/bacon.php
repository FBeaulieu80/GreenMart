<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="../../favicon.ico">
    <meta name="author" content="Athigan Sinnathurai">
    <meta charset="UTF-8">
    <title>Bacon | Meat | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/p3.css"/>
</head>

<body>
<?php require_once "../../common/header.php"; ?>
<div class="main">

    <div class="grid-container">
        <div class="grid-item">
            <img src="../../images/meat/bacon.jpg" alt="Bacon">
        </div>
        <div class="grid-item">
            <h2>Bacon</h2>
            <span class="original-price">$7.20/ea</span><br/>
            <span class="sale-price">$6.80/ea</span><br/>
            <p style="font-style: italic;">Offer valid until August 20, 2020</p>
            <br/>
            Product of Kentucky. <br/> <br/>
            <div class="addtocart">
                <form action="">
                    <label for="quantity">Quantity:</label> <br/>
                    <button type="submit" style="float:right">Add to Cart</button>
                    <input type="text" id="quantity" name="quantity" value="1">
                </form>
            </div>
            <br/> <br/>
            <h3>Description</h3> <!-- Change description below -->
            <p>Thin sliced crispy bacon that is easy to cook. Try out one of our <a href="https://www.bonappetit.com/search?q=bacon">recipes</a> to
                see how bacon can be used for amazing home meals.</p>
        </div>
    </div>
</div>
<?php require "../../common/footer.php"; ?>
</body>

</html>