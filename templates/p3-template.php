<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="../favicon.ico">
    <meta name="author" content="Kyle"> <!-- Made product page template -->
    <meta charset="UTF-8">
    <title>Banana | Fruit & Veg</title> <!-- Change -->
    <link rel="stylesheet" type="text/css" href="../css/p3.css"/>
</head>
<body>
<?php require_once "../../common/header.php"; ?>
<div class="main">

    <div class="grid-container">
        <div class="grid-item">
            <img src="../images/fruit-veg/banana.png" alt="Banana"> <!-- Change -->
        </div>
        <div class="grid-item">
            <h2>Banana</h2> <!-- Change -->
            <span class="original-price">$0.89/lb</span><br/> <!-- Change -->
            <span class="sale-price">$0.60/lb</span><br/> <!-- Remove if not on sale -->
            <br/>
            Product of Guatemala. <br/> <br/> <!-- Change -->
            <div class="addtocart">
                <form action="">
                    <label for="quantity">Quantity:</label> <br/>
                    <button type="submit" style="float:right">Add to Cart</button>
                    <input type="text" id="quantity" name="quantity" value="1">
                </form>
            </div>
            <br/> <br/>
            <h3>Description</h3> <!-- Change description below -->
            <p>Organic bananas from Guatemala. Grown on a sustainable and fair trade certified farm.
                Check out our <a href="https://www.bonappetit.com/recipes">recipes</a> to see what delicious meals and desserts you can
                make with bananas.</p>
        </div>
    </div>
</div>
</body>

<footer>
    <ul>
        <li>Copyright &copy 2020 Green Mart Inc. All Rights Reserved.</li>
        <li>Created my free logo at <a href="https://logomakr.com/">Logomakr.com</a></li>
    </ul>
</footer>

</html>