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
                <h2>French Style Baguette</h2>
                <span class="original-price">$4.95/ea</span><br />
                <span class="sale-price">$3.95/ea</span><br />
                <br />
                Product of Canada. <br /> <br />
                <div class="addtocart">
                    <form action="/action_page.php">
                        <label for="quantity">Quantity:</label> <br />
                        <button type="submit" style="float:right">Add to Cart</button>
                        <input type="text" id="quantity" name="quantity" value="1">
                    </form>
                </div>
                <br /> <br />
                <h3>Description</h3> <!-- Change description below -->
                <p>Organic French style baguette backed fresh daily. Made from locally sourced flour thanks to our partnership with local farms.</p>
            </div>
        </div>
    </div>
    <?php require "../../common/footer.html" ?>
</body>
</html>