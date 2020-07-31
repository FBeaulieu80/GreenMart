<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="Laura Boivin">
    <meta charset="UTF-8">
    <title>Vegan Fairtrade Cookies | Snacks | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../../css/p3.css" />

</head>

<body>
<?php require_once "../../common/header.php"; ?>
<div class="main">
    <div class = "cookie-options">

        <h3>Select one of our delicious cookie options</h3>
        <button class = "cookie-button" id = "button1">Chocolate</button>
        <button class = "cookie-button" id = "button2">Peanut Butter</button>
        <button class = "cookie-button" id = "button3">Salted Caramel</button>

    </div>
    <div class="grid-container">
        <div class="grid-item">
            <img src="../../images/snacks/Chocolate%20cookies.jpg" alt="Cookies image"> <!-- default image -->
            <script src = "../../js/cookie-types.js"></script>
        </div>
        <div class="grid-item">
            <h2>Vegan Fairtrade Cookies</h2>
            <span class="price">$4.99/ea</span><br />

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
            <div id = "description">
            <p>These vegan fairtrade cookies are a baker's masterpiece. <br><br>
                This snack is delicious, moist and melts
                in your mouth. At every step of production,
                all workers are well compensated for their work and all
                our ingredients are ethically sourced, as they should be.  </p>
            </div>

            <a id = "details">More Details</a>

            <script src = "../../js/cookie-description.js"></script>

        </div>
    </div>
</div>
<?php require "../../common/footer.html"; ?>
</body>


</html>