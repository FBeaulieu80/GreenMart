<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="Kyle"> <!-- Made product page template -->
    <meta charset="UTF-8">
    <title>GT's Kombucha | Snacks</title> <!-- Change -->
    <link rel="stylesheet" type="text/css" href="../../css/p3.css" />
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
</head>

<body>
<?php require_once "../../common/header.php"; ?>
    <div class="main">

        <div class="grid-container">
            <div class="grid-item">
                <img src="../../images/snacks/kombucha.png" alt="Banana"> <!-- Change -->
            </div>
            <div class="grid-item">
                <h2>GT's Kombucha</h2> <!-- Change -->
                <span class="original-price">$4.79/ea</span><br /> <!-- Change -->
                <span class="sale-price">$3.00/ea</span><br /> <!-- Remove if not on sale -->
                <br />
                Product of the United States. <br /> <br /> <!-- Change -->
                <div class="addtocart">
                    <form action="/action_page.php">
                        <label for="quantity">Quantity:</label> <br />
                        <button type="submit" style="float:right">Add to Cart</button>
                        <input type="text" id="quantity" name="quantity" value="1">
                    </form>
                </div>
                <br /> <br />
                <h3>Description</h3> <!-- Change description below -->
                <p>GT's organic and raw kombucha is guaranteed to aid your health. Kombucha is a naturally fermented
                tea beverage made with a SCOBY (symbiotic culture of bacteria and yeast) that helps with digestion and
                improving the immune system.</p>
            </div>
        </div>
    </div>
</body>

</html>