<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="Laura Boivin">
    <meta charset="UTF-8">
    <title>GT's Chocolate Cookies | Snacks</title>
    <link rel="stylesheet" type="text/css" href="../../css/p3.css" />
</head>

<header>
    <!-- Logo and Search bar-->
    <div class="topnav">
        <ul>
            <li><img src="../../images/logo_new.png" alt="Green Mart logo" id="logo"></li>
            <li style="float:right">
                <div class="search-bar">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search for a product" name="search">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </li>
        </ul>
    </div>

    <!-- Main navigation bar with Aisles, random buttons, login, sign up, checkout-->
    <div class="mainnav">
        <ul>
            <li><a href="../../index.php">Home</a></li>
            <li><a href="aisles/p2.html">Aisles</a></li> <!-- TODO: Implement dropdown menu -->
            <li><a href="deals/">Deals</a></li>
            <li><a href="recipes/">Recipes</a></li>
            <li><a href="blog/">Blog</a></li>

            <li style="float:right"><a href="cart/">Shopping Cart (0)</a></li>
            <li style="float:right"><a href="signup/">Sign Up</a></li>
            <li style="float:right"><a href="login/">Log In</a></li>
        </ul>
    </div>
</header>

<body>
<div class="main">

    <div class="grid-container">
        <div class="grid-item">
            <img src="../../images/snacks/Chocolate%20cookies.jpg alt="Vegan Fairtrade Chocolate Cookies"> <!-- Change -->
        </div>
        <div class="grid-item">
            <h2>GT's Vegan Fairtrade Chocolate Cookies</h2> <!-- Change -->
            <span class="original-price">$4.99/ea</span><br /> <!-- Change -->

            <br />
            Product of the Canada. <br /> <br /> <!-- Change -->
            <div class="addtocart">
                <form action="/action_page.php">
                    <label for="quantity">Quantity:</label> <br />
                    <button type="submit" style="float:right">Add to Cart</button>
                    <input type="text" id="quantity" name="quantity" value="1">
                </form>
            </div>
            <br /> <br />
            <h3>Description</h3> <!-- Change description below -->
            <p>GT's Vegan Fairtrade Chocolate Cookies are a decadent baker's masterpiece. This dessert is moist, melts
            in your mouth and ethical. Our cocoa beans are picked by farmers in Nigeria who are compensated fairly for their
                work, as they should be.  </p>
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