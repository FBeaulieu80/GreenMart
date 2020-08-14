<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="../../favicon.ico">
    <meta name="author" content="Kyle Taylor-Bracken"> <!-- Made product page template -->
    <meta charset="UTF-8">
    <title>Salmon Filet | Meat | Green Mart</title> <!-- Change -->
    <link rel="stylesheet" type="text/css" href="../../css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/p3.css"/>
</head>

<body>
<?php require_once "../../common/header.php"; ?>
<div class="main">

    <div class="grid-container">
        <div class="grid-item">
            <img src="../../images/meat/salmon.png" alt="Salmon"> <!-- Change -->
        </div>
        <div class="grid-item">
            <h2>Salmon Filet</h2> <!-- Change -->
            <span class="original-price">$10.99/lb</span><br/> <!-- Change -->
            <span class="sale-price">$8.50/lb</span><br/> <!-- Remove if not on sale -->
            <br/>
            Product of Nova Scotia. <br/> <br/> <!-- Change -->
            <div class="addtocart">
                <form action="">
                    <label for="quantity">Quantity:</label> <br/>
                    <button type="submit" style="float:right">Add to Cart</button>
                    <input type="text" id="quantity" name="quantity" value="1">
                </form>
            </div>
            <br/> <br/>
            <h3>Description</h3> <!-- Change description below -->
            <p>Fresh Atlantic salmon straight from the harbours of Nova Scotia. Certified to be sustainably farmed
                in the open seas by local fishers.
                Check out our <a href="https://www.bonappetit.com/search?q=salmon">recipes</a> to see what delicious appetizers and meals you can
                make with salmon.</p>
        </div>
    </div>
</div>
<?php require "../../common/footer.php"; ?>
</body>

</html>