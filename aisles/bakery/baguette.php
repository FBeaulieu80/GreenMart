<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Felix Beaulieu">
    <meta charset="UTF-8">
    <title>French Baguette | Bakery | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../../css/p3.css" />
</head>
<body>
    <?php require_once "../../common/header.php"; ?>
    <div class="main">
        <div class="grid-container">
            <div class="grid-item">
                <img src="../../images/bakery/baguette.jpg" alt="French Baguette">
            </div>
            <div class="grid-item">
                <h2>Banana</h2> <!-- Change -->
                <span class="original-price">$4.95</span><br />
                <span class="sale-price">$3.95</span><br />
                <br />
                Product of Canada. <br /> <br /> <!-- Change -->
                <div class="addtocart">
                    <form action="/action_page.php">
                        <label for="quantity">Quantity:</label> <br />
                        <button type="submit" style="float:right">Add to Cart</button>
                        <input type="text" id="quantity" name="quantity" value="1">
                    </form>
                </div>
                <br /> <br />
                <h3>Description</h3> <!-- Change description below -->
                <p>Organic French style baguette backed fresh daily. Made from locally sourced flour thanks to our partnership with local farms.
                Check out our <a href="../../recipes">recipes</a> to see what delicious meals and desserts you can make with bananas.</p>
            </div>
        </div>
    </div>
<?php require "common/footer.html" ?>
</body>
</html>