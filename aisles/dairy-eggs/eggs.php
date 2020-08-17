<html lang="en">

<head>

    <link rel="shortcut icon" href="../../favicon.ico">
    <meta name="author" content="Michael Rowe">
    <meta charset="UTF-8">
    <title>Eggs | Dairy & Eggs | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/p3.css"/>
</head>

<body>
<?php require "../../common/header.php" ?>
<div class="main">

    <div class="grid-container">
        <div class="grid-item">
            <img src="../../images/dairy-eggs/eggs.jpg" alt="Eggs">
        </div>
        <div class="grid-item">
            <h2>Eggs</h2>
            <span class="original-price">$2.99/ea</span><br/>
            <span class="sale-price">$2.49/ea</span><br/>
            <br/>
            <br/>
            <div class="addtocart">
                <form action="">
                    <label for="quantity">Quantity:</label> <br/>
                    <button type="submit" style="float:right">Add to Cart</button>
                    <input type="text" id="quantity" name="quantity" value="1">
                </form>
            </div>
            <p>Product of Canada.</p><br/>
            <h3>Description</h3>
            <p>Eggs are laid by female animals of many different species, including birds, reptiles, amphibians, a
                few mammals, and fish, and many of these have been eaten by humans for thousands of years. Bird and
                reptile eggs consist of a protective eggshell, albumen, and vitellus, contained within various thin
                membranes.</p>
        </div>
    </div>
</div>
<?php require "../../common/footer.php"; ?>
</body>
</html>