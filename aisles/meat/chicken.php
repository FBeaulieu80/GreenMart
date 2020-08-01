<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="Michael Rowe">
    <meta charset="UTF-8">
    <title>Chicken | Meat | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../../css/p3.css" />
</head>

<body>
<?php require_once "../../common/header.php"; ?>
<div class="main">

    <div class="grid-container">
        <div class="grid-item">
            <img src="../../images/meat/chicken.jpg" alt="Roast Chicken">
        </div>
        <div class="grid-item">
            <h2>Roast Chicken</h2>
            <span class="price">$9.99/ea</span><br />
            <br />
            Product of Alberta. <br /> <br />
            <div class="addtocart">
                <form action="/action_page.php">
                    <label for="quantity">Quantity:</label> <br />
                    <button type="submit" style="float:right">Add to Cart</button>
                    <input type="text" id="quantity" name="quantity" value="1">
                </form>
            </div>
            <br /> <br />
            <h3>Description</h3> <!-- Change description below -->
            <p>Chicken is the most common type of poultry in the world. Owing to the relative ease and low cost of raising
                them in comparison to animals such as cattle or hogs, chickens have become prevalent throughout the cuisine
                of cultures around the world, and their meat has been variously adapted to regional tastes.</p>
        </div>
    </div>
</div>
<?php require "../../common/footer.php"; ?>
</body>

</html>