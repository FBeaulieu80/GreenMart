<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="../../favicon.ico">
    <meta name="author" content="Athigan Sinnathurai">
    <meta charset="UTF-8">
    <title>Kiwi | Fruit & Veg | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/p3.css"/>
</head>

<body>
<?php require_once "../../common/header.php"; ?>
<div class="main">

    <div class="grid-container">
        <div class="grid-item">
            <img src="../../images/fruit-veg/kiwi.jpg" alt="Kiwi">
        </div>
        <div class="grid-item">
            <h2>Kiwi</h2> <!-- Change -->
            <span class="original-price">$2.30/lb</span><br/>
            <span class="sale-price">$2.15/lb</span><br/>
            <br/>
            Product of Honduras. <br/> <br/>
            <div class="addtocart">
                <form action="">
                    <label for="quantity">Quantity:</label> <br/>
                    <button type="submit" style="float:right">Add to Cart</button>
                    <input type="text" id="quantity" name="quantity" value="1">
                </form>
            </div>
            <br/> <br/>
            <h3>Description</h3>
            <p>Fresh kiwis from Honduras. Grown on a sustainable and fair trade certified farm.
                Check out our <a href="https://www.bonappetit.com/search?q=kiwi">recipes</a> to how you can add kiwis to your home meals.</p>
        </div>
    </div>
</div>
<?php require "../../common/footer.php"; ?>
</body>
</html>
