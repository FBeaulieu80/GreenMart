<html lang="en" xmlns:style="http://www.w3.org/1999/html">
<head>
    <meta name="author" content="Michael Rowe">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aisles</title>
    <link rel="stylesheet" href="../../css/main.css" type="text/css" />
    <link rel="stylesheet" href="../../css/p2.css" type="text/css" />
</head>
<body>
<?php require "../../common/header.php"; ?>
<ul class="breadcrumb">
    <li><a href="../../index.php">Store</a></li>
    <li><a href="../index.php">Aisles</a></li>
    <li>Dairy & Eggs</li>
</ul>
<div class="main">
    <div class="aisle-cards">
        <div class="aisle-card">
<!--            <a href="eggs.php">-->
                <img src="../../images/dairy-eggs/eggs.jpg" alt="Eggs" style="filter: grayscale(100%)">
                <div class="text">Eggs</div>
                <div class="price-sale">SOLD OUT</div> <!-- $2.49/ea -->
<!--            </a>-->
        </div>

        <div class="aisle-card">
            <a href="cheese.php">
                <img src="../../images/dairy-eggs/cheese.jpg" alt="Cheese">
                <div class="text">Cheese</div>
                <div class="price-sale">$3.29/lb</div>
            </a>
        </div>

        <div class="aisle-card">
<!--            <a href="milk.php">-->
                <img src="../../images/dairy-eggs/milk.jpg" alt="Milk" style="filter: grayscale(100%)">
                <div class="text">Milk</div>
                <div class="price-sale">SOLD OUT</div>
<!--            </a>-->
        </div>
    </div>
</div>
<?php require "../../common/footer.php"; ?>
</body>
</html>