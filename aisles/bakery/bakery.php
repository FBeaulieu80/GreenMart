<html lang="en" xmlns:style="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery | Aisle | Green Mart</title>
    <link rel="stylesheet" href="../../css/main.css" type="text/css" />
    <link rel="stylesheet" href="../../css/p2.css" type="text/css" />
    <script type="text/javascript" src="../../scripts/aisles/bakery.js"></script>
    <meta name="author" content="Felix Beaulieu">
    <style>
        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

    </style>
</head>
<body onload="slideShow()">
<?php require "../../common/header.php"; ?>
<div class="main">
    <div class="row aisle-header">
        <div class="col-1"><a href="../index.php"><<</a></div>
        <div class="col-11">Bakery</div>
    </div>


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
                <div class="price-sale">$3.95/ea</div>
            </a>
        </div>

        <div class="aisle-card">
            <a href="cakes.php">
                <div class="slideShowContainer">
                    <img src="../../images/bakery/carrot-cake.jpg" alt="Cake" class="slide fade">
                    <img src="../../images/bakery/cheesecake.jpg" alt="Cake" class="slide fade">
                    <img src="../../images/bakery/chocolate-cake.jpg" alt="Cake" class="slide fade">
                </div>

                <div class="text">Cakes</div>
                <div class="price">$11.99/ea - $155.99/ea</div>
            </a>
        </div>
    </div>
</div>
<?php require "../../common/footer.php"; ?>
</body>
</html>