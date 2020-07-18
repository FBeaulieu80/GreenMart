<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="Laura Boivin">
    <meta charset="UTF-8">
    <title>Vegan Fairtrade Chocolate Cookies | Snacks</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../../css/p3.css" />
</head>



<body>
<?php require_once "../../common/header.php"; ?>
<div class="main">

    <div class="grid-container">
        <div class="grid-item">
            <img src="../../images/snacks/Chocolate%20cookies.jpg" alt="Vegan Fairtrade Chocolate Cookies"> <!-- Change -->
        </div>
        <div class="grid-item">
            <h2>Vegan Fairtrade Chocolate Cookies</h2> <!-- Change -->
            <span class="price">$4.99/ea</span><br /> <!-- Change -->

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
            <p>These vegan fairtrade chocolate cookies are a baker's masterpiece. This dessert is delicious, moist and melts
            in your mouth. Most important of all, these cookies are ethical. Our cocoa beans are picked by farmers in Nigeria
                who are well compensated for their work, as they should be.  </p>
        </div>
    </div>
</div>
<?php require "../../common/footer.html"; ?>
</body>


</html>