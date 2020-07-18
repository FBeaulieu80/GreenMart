<html lang="en" xmlns:style="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meat | Green Mart</title>
    <link rel="stylesheet" href="../../css/main.css" type="text/css" />
    <link rel="stylesheet" href="../../css/p2.css" type="text/css" />
    <meta name="author" content="Athigan Sinnathurai">
</head>
<body>
<?php require "../../common/header.php"; ?>
<div class="main">
    <div class="row aisle-header">
        <div class="col-1"><a href="../index.php"><<</a></div>
        <div class="col-11">Meat</div>
    </div>

    <div class="aisle-cards">
        <div class="aisle-card">
            <a href="bacon.php">
                <img src="../../images/meat/bacon.jpg" alt="Bacon">
                <div class="text">Bacon</div>
                <div class="price-sale">$6.80/ea</div>
            </a>
        </div>

        <div class="aisle-card">
            <a href="salmon-filet.php">
                <img src="../../images/meat/salmon.png" alt="Salmon Filet">
                <div class="text">Salmon Filet</div>
                <div class="price-sale">$8.50/lb</div>
            </a>
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
<?php require "../../common/footer.html"; ?>
</body>
</html>