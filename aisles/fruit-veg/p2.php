<html lang="en" xmlns:style="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aisles</title>
    <link rel="stylesheet" href="../../css/main.css" type="text/css" />
    <link rel="stylesheet" href="../../css/p2.css" type="text/css" />
    <meta name="author" content="Kyle"> <!-- TODO: Change the author name -->
</head>
<body>
<?php require "../../common/header.php"; ?>
<div class="main">
    <h2 class="aisle-header">Fruits & Vegetables</h2>
    <div class="aisle-cards-container">
        <div class="aisle-card">
            <a href="banana.php">
                <img src="../../images/fruit-veg/banana.png" alt="Banana">
                <div class="text">Banana</div>
                <div class="price-sale">$0.60/lb</div>
            </a>
        </div>

        <div class="aisle-card">
            <a href="kiwi.php">
                <img src="../../images/fruit-veg/kiwi.jpg" alt="kiwi">
                <div class="text">Kiwi</div>
                <div class="price-sale">$2.15/lb</div>
            </a>
        </div>
    </div>
</div>
<!--?php require "../../common/footer.html"; ?-->
</body>
</html>