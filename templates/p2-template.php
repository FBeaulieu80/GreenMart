<html lang="en" xmlns:style="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery | Aisle | Green Mart</title>
    <link rel="stylesheet" href="../../css/main.css" type="text/css" />
    <link rel="stylesheet" href="../../css/p2.css" type="text/css" />
    <meta name="author" content="Felix Beaulieu">
</head>
<body>
<?php require "../../common/header.php"; ?>
<div class="main">
    <h2 class="aisle-header">Bakery</h2>
    <div class="aisle-cards">
        <div class="aisle-card">
            <a href="rye_bread.php">
                <img src="../../images/bakery/rye_bread.jpg" alt="Rye Bread">
                <div class="text">Rye Bread</div>
                <div class="price-sale">$3.45/ea</div>
            </a>
        </div>

        <div class="aisle-card">
            <a href="baguette.php">
                <img src="../../images/bakery/baguette.jpg" alt="Baguette">
                <div class="text">French Baguette</div>
                <div class="price-sale">$3.95</div>
            </a>
        </div>
    </div>
</div>
<?php require "../../common/footer.html"; ?>
</body>
</html>