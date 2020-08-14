<html lang="en">

<head>

    <link rel="shortcut icon" href="../../favicon.ico">
    <meta name="author" content="Michael Rowe">
    <meta charset="UTF-8">
    <title>Milk | Dairy & Eggs | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/p3.css"/>
</head>

<body>
<?php require "../../common/header.php" ?>
<div class="main">

    <div class="grid-container">
        <div class="grid-item">
            <img src="../../images/dairy-eggs/milk.jpg" alt="Milk">
        </div>
        <div class="grid-item">
            <h2>Milk</h2>
            <span class="price">$4.49/ea</span><br/>
            <br/>
            <br/>
            <div class="addtocart">
                <form action="">
                    <label for="quantity">Quantity:</label> <br/>
                    <button type="submit" style="float:right">Add to Cart</button>
                    <input type="text" id="quantity" name="quantity" value="1">
                </form>
            </div>
            <p>Product of the United States.</p><br/>
            <h3>Description</h3>
            <p>Milk is a white, nutrient-rich liquid food produced in the mammary glands of mammals. It is the primary
                source
                of nutrition for infant mammals before they are able to digest other types of food. Early-lactation milk
                contains
                colostrum, which carries the mother's antibodies to its young and can reduce the risk of many
                diseases.</p>
        </div>
    </div>
</div>
<?php require "../../common/footer.php"; ?>
</body>
</html>