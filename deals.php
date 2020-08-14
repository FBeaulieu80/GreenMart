<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="favicon.ico">
    <meta name="author" content="Kyle">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Deals | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/p1.css"/>
</head>

<body>
<?php require "common/header.php"; ?>

<!-- Generate deals from items with a sale price? -->
<div class="main">
    <h2><a href="common/404.php">Deals of the week</a></h2>

    <div class="dow-cards">
        <div class="dow-item">
            <div class="col">
                <a href="aisles/fruit-veg/banana.php">
                    <img class="row-3" src="images/fruit-veg/banana.png" alt="Banana"><br/>
                    <div class="row-1">Banana</div>
                    <div class="row-1 original-price">$0.89/lb</div>
                    <div class="row-1 sale-price">$0.60/lb!!</div>
                </a>
            </div>
        </div>
        <div class="dow-item">
            <div class="col">
                <a href="aisles/meat/salmon-filet.php">
                    <img class="row-3" src="images/meat/salmon.png" alt="Banana">
                    <div class="row-1">Salmon Filet</div>
                    <div class="row-1 original-price">$10.99/lb</div>
                    <div class="row-1 sale-price">$8.50/lb!!</div>
                </a>
            </div>
        </div>
        <div class="dow-item">
            <div class="col">
                <a href="aisles/snacks/kombucha.php">
                    <img class="row-3" src="images/snacks/kombucha.png" alt="Banana">
                    <div class="row-1">GT's Kombucha (Assorted flavours)</div>
                    <div class="row-1 original-price">$4.79/ea</div>
                    <div class="row-1 sale-price">$3.00/ea!!</div>
                </a>
            </div>
        </div>
    </div>

</div>
<?php require "common/footer.php" ?>
</body>
</html>