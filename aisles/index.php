<html lang="en" xmlns:style="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aisles | Green Mart</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css" />
    <link rel="stylesheet" href="../css/p2.css" type="text/css" />
    <meta name="author" content="Felix Beaulieu">
</head>
<body>
<?php require "../common/header.php"; ?>
<div class="main">
    <div class="aisle-cards">
        <div class="aisle-card">
            <a href="bakery/bakery.php">
                <img class="image" src="../images/bakery/bakery.jpg" alt="Bread">
                <div class="middle">
                    <div class="text">Bakery</div>
                </div>
            </a>
        </div>
        <div class="aisle-card">
            <a href="dairy-eggs/dairy-eggs.php">
                <img class="image" src="../images/dairy-eggs/cheese.jpg" alt="Cheese">
                <div class="middle">
                    <div class="text">Dairy &amp; Eggs</div>
                </div>
            </a>
        </div>
        <div class="aisle-card">
            <a id="fruits-aisle" href="fruit-veg/fruit-veg.php">
                <img class="image" src="../images/fruit-veg/apples.jpg" alt="Apples">
                <div class="middle">
                    <div class="text">Fruits &amp; Veggies</div>
                </div>
            </a>
        </div>
        <div class="aisle-card">
            <a id="meat-aisle" href="meat/meat.php">
                <img class="image" src="../images/meat/beef.jpg" alt="Beef">
                <div class="middle">
                    <div class="text">Meat</div>
                </div>
            </a>
        </div>
        <div class="aisle-card">
            <a id="snacks-aisle" href="snacks/snacks.php">
                <img class="image" src="../images/snacks/candy.jpg" alt="Candy">
                <div class="middle">
                    <div class="text">Snacks</div>
                </div>
            </a>
        </div>
    </div>
</div>
<?php require "../common/footer.html"; ?>
</body>
</html>

