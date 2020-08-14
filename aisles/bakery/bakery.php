<html lang="en">
<head>

    <link rel="shortcut icon" href="../../favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery | Aisle | Green Mart</title>
    <link rel="stylesheet" href="../../css/main.css" type="text/css"/>
    <link rel="stylesheet" href="../../css/p2.css" type="text/css"/>
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
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }

    </style>
</head>
<body onload="slideShow()">
<?php require "../../common/header.php"; ?>
<ul class="breadcrumb">
    <li><a href="../../index.php">Store</a></li>
    <li><a href="../index.php">Aisles</a></li>
    <li>Bakery</li>
</ul>
<div class="main">
    <div class="aisle-cards">
        <div class="aisle-card">
            <!--            <a href="rye_bread.php">-->
            <img src="../../images/bakery/rye_bread.jpg" alt="Rye Bread" style="filter: grayscale(100%)">
            <div class="text">Rye Bread</div>
            <div class="price-sale">SOLD OUT</div> <!-- $3.45/ea -->
            <!--            </a>-->
        </div>
        <div class="aisle-card">
            <!--            <a href="baguette.php">-->
            <img src="../../images/bakery/baguette.jpg" alt="Baguette" style="filter: grayscale(100%)">
            <div class="text">French Baguette</div>
            <div class="price-sale">SOLD OUT</div> <!-- $3.95/ea -->
            <!--            </a>-->
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