<html lang="en">
<head>

    <link rel="shortcut icon" href="../../favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meat | Green Mart</title>
    <link rel="stylesheet" href="../../css/main.css" type="text/css"/>
    <link rel="stylesheet" href="../../css/p2.css" type="text/css"/>
    <meta name="author" content="Athigan Sinnathurai">
</head>
<body>
<?php require "../../common/header.php"; ?>
<ul class="breadcrumb">
    <li><a href="../../index.php">Store</a></li>
    <li><a href="../index.php">Aisles</a></li>
    <li>Meat</li>
</ul>
<div class="main">

    <div class="aisle-cards">
        <div class="aisle-card">
            <!--            <a href="bacon.php">-->
            <img src="../../images/meat/bacon.jpg" alt="Bacon" style="filter: grayscale(100%)">
            <div class="text">Bacon</div>
            <div class="price-sale">SOLD OUT</div>
            <!--            </a>-->
        </div>

        <div class="aisle-card">
            <!--            <a href="salmon-filet.php">-->
            <img src="../../images/meat/salmon.png" alt="Salmon Filet" style="filter: grayscale(100%)">
            <div class="text">Salmon Filet</div>
            <div class="price-sale">SOLD OUT</div>
            <!--            </a>-->
        </div>

        <div class="aisle-card">
            <a href="chicken.php">
                <img src="../../images/meat/chicken.jpg" alt="Roast Chicken">
                <div class="text">Roast Chicken</div>
                <div class="price">$9.99/ea</div>
            </a>
        </div>
    </div>
</div>
<?php require "../../common/footer.php"; ?>
</body>
</html>