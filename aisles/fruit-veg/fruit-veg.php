<html lang="en">
<head>

    <link rel="shortcut icon" href="../../favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits & Vegetables</title>
    <link rel="stylesheet" href="../../css/main.css" type="text/css"/>
    <link rel="stylesheet" href="../../css/p2.css" type="text/css"/>
    <meta name="author" content="Kyle Taylor-Bracken">
</head>
<body>
<?php require "../../common/header.php"; ?>
<ul class="breadcrumb">
    <li><a href="../../index.php">Store</a></li>
    <li><a href="../index.php">Aisles</a></li>
    <li>Fruits & Vegetables</li>
</ul>
<div class="main">
    <div class="aisle-cards">
        <div class="aisle-card">
            <!--            <a href="banana.php">-->
            <img src="../../images/fruit-veg/banana.png" alt="Banana" style="filter: grayscale(100%)">
            <div class="text">Banana</div>
            <div class="price-sale">SOLD OUT</div>
            <!--            </a>-->
        </div>

        <div class="aisle-card">
            <!--            <a href="kiwi.php">-->
            <img src="../../images/fruit-veg/kiwi.jpg" alt="kiwi" style="filter: grayscale(100%)">
            <div class="text">Kiwi</div>
            <div class="price-sale">SOLD OUT</div>
            <!--            </a>-->
        </div>
        <div class="aisle-card">
            <a href="cherries.php">
                <img src="../../images/fruit-veg/cherries.jpg" alt="cherries">
                <div class="text">Cherries</div>
                <div class="price-sale">$4.99/lb</div>
            </a>
        </div>
    </div>
</div>
<?php require "../../common/footer.php"; ?>
</body>
</html>