<html lang="en">

<head>
    <meta name="author" content="Michael Rowe"> <!-- Buttons added by Athigan Sinnathurai-->
    <meta charset="UTF-8">
    <title>Cheese | Dairy & Eggs | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../../css/p3.css" />
    <script type="text/javascript" src="../../scripts/aisles/dairy-eggs.js"></script>
</head>

<body>
<?php require "../../common/header.php" ?>
<div class="main">

    <div class="grid-container">
        <div class="grid-item">
             <img id="imageToSwap" src="../../images/dairy-eggs/cheese.jpg" alt="Cheese">
        </div>
        <div class="grid-item">
            <h2>Cheese</h2>
            <span class="original-price">$3.79/lb</span><br />
            <span class="sale-price">$3.29/lb</span><br />
            <br />
            <br />

            <p style="color: darkslateblue;font-weight: bold;">Select between 3 types of cheese:
                <select id="dlist" onChange="swapImage()">
                    <option style="color: darkgreen;" value="../../images/dairy-eggs/cheese.jpg">Regular</option>
                    <option style="color: crimson;" value="../../images/dairy-eggs/cheddar.jpg">Cheddar</option>
                    <option style="color: blueviolet;" value="../../images/dairy-eggs/parmesan.jpg">Parmesan</option>
                </select></p>

            <div class="addtocart">
                <form action=""> <!-- Will add /action_page.php for WP3 -->
                    <label for="quantity">Quantity:</label> <br />
                        <div onclick="increaseValue()" value="Increase Value">+</div>
                        <input type="number" id="number" value="0" />
                        <div onclick="decreaseValue()" value="Decrease Value">-</div><br>
                    <button type="submit" onclick="alert('Item has been added to your cart.')">Add to Cart</button>
                </form>
            </div>
            <p>Product of Switzerland.</p><br />
            <button onclick="ShowAndHide()">Detailed Description</button>

            <div id="SectionName" style="display:none"><p>Cheese is a dairy product, derived from milk and produced in a wide range of flavors, textures and forms
            by coagulation of the milk protein casein. It comprises proteins and fat from milk, usually the milk of
            cows, buffalo, goats, or sheep.</p></div>
        </div>
    </div>
</div>
<?php require "../../common/footer.html"; ?>
</body>
</html>
