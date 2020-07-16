<html lang="en">

<head>
    <meta name="author" content="Michael">
    <meta charset="UTF-8">
    <title>Cheese | Dairy & Eggs</title>
    <link rel="stylesheet" type="text/css" href="../../css/p3.css" />
</head>

<body>
<?php require "../../common/header.php" ?>
<div class="main">

    <div class="grid-container">
        <div class="grid-item">
            <img src="../../images/dairy-eggs/cheese.jpg" alt="Eggs">
        </div>
        <div class="grid-item">
            <h2>Cheese</h2>
            <span class="original-price">$3.79/lb</span><br />
            <span class="sale-price">$3.29/lb</span><br />
            <br />
            <br />
            <div class="addtocart">
                <form action="/action_page.php">
                    <label for="quantity">Quantity:</label> <br />
                    <button type="submit" style="float:right">Add to Cart</button>
                    <input type="text" id="quantity" name="quantity" value="1">
                </form>
            </div>
            <p>Cheese please!</p><br />
            <h3>Description</h3>
            <p>Cheese is a dairy product, derived from milk and produced in a wide range of flavors, textures and forms
                by coagulation of the milk protein casein. It comprises proteins and fat from milk, usually the milk of
                cows, buffalo, goats, or sheep.</p>
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