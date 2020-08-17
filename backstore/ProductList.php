<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="../favicon.ico">
    <meta name="author" content="Michael Rowe">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta charset="UTF-8">
    <title>Product List</title>
    <!--<link rel="stylesheet" type="text/css" href="../css/main.css" />-->
    <link rel="stylesheet" type="text/css" href="../css/p7.css"/>
    <link rel="stylesheet" type="text/css" href="../css/backstore.css"/>
</head>
<?php require "common/authenticate.php"; ?>
<body>
<!-- Header in external file -->
<?php require "common/header.php"; ?>
<div class="main">
    <h2>Product List</h2>
    <div id="product-list" class="product-table">
        <form action="EditProduct.php">
            <input type="submit" value="Add">
            <input type="submit" value="Delete">
        </form>

        <table style="width:100%">
            <tr>
                <th><label><input type="checkbox" id="delete"></label></th>
                <th>Image</th>
                <th>ID</th>
                <th>Product Name</th>
                <th>Aisle</th>
                <th>Price</th>
                <th>Sale Price</th>
                <th>Quantity</th>
                <th>Origin</th>
                <th>Description</th>
                <th>Seller</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <tr>
                <td><label><input type="checkbox" id="delete"></label></td>
                <td><img src="../images/bakery/baguette.jpg" alt="Baguette" style="width:50px;height:50px"</td>
                <td>1</td>
                <td>Baguette</td>
                <td>Bakery</td>
                <td>$1.99</td>
                <td>$1.99</td>
                <td>0</td>
                <td>France</td>
                <td>
                    <label><textarea id="description" name="description" rows="1" cols="30">A baguette is a long, thin loaf of French bread that is commonly made from basic lean dough. It is distinguishable by its length and crisp crust. A baguette has a diameter of about 5 or 6 cm and a usual length of about 65 cm, although a baguette can be up to 1 m long.</textarea></label>
                </td>
                <td>Bob</td>
                <td>Disabled</td>
                <td>
                    <form action="EditProduct.php">
                        <input type="submit" value="Edit">
                    </form>
                </td>
            </tr>
            <tr>
                <td><label><input type="checkbox" id="delete"></label></td>
                <td><img src="../images/dairy-eggs/eggs.jpg" alt="Eggs" style="width:50px;height:50px"</td>
                <td>2</td>
                <td>Eggs</td>
                <td>Dairy-Eggs</td>
                <td>$2.99</td>
                <td>$2.49</td>
                <td>12</td>
                <td>Canada</td>
                <td>
                    <label><textarea id="description" name="description" rows="1" cols="30">Eggs are laid by female animals of many different species, including birds, reptiles, amphibians, a few mammals, and fish, and many of these have been eaten by humans for thousands of years. Bird and reptile eggs consist of a protective eggshell, albumen, and vitellus, contained within various thin membranes.</textarea></label>
                </td>
                <td>Jane</td>
                <td>Disabled</td>
                <td>
                    <form action="EditProduct.php">
                        <input type="submit" value="Edit">
                    </form>
                </td>
            </tr>
            <tr>
                <td><label><input type="checkbox" id="delete"></label></td>
                <td><img src="../images/fruit-veg/banana.png" alt="Banana" style="width:50px;height:50px"</td>
                <td>3</td>
                <td>Banana</td>
                <td>Fruit-Veg</td>
                <td>$0.89/lb</td>
                <td>$0.60/lb</td>
                <td>112</td>
                <td>Guatemala</td>
                <td>
                    <label><textarea id="description" name="description" rows="1" cols="30">Organic bananas from Guatemala. Grown on a sustainable and fair trade certified farm. Check out our recipes to see what delicious meals and desserts you can make with bananas.</textarea></label>
                </td>
                <td>Jose</td>
                <td>Enabled</td>
                <td>
                    <form action="EditProduct.php">
                        <input type="submit" value="Edit">
                    </form>
                </td>
            </tr>
            <tr>
                <td><label><input type="checkbox" id="delete"></label></td>
                <td><img src="../images/meat/salmon.png" alt="Salmon" style="width:50px;height:50px"</td>
                <td>4</td>
                <td>Salmon Fillet</td>
                <td>Meat</td>
                <td>$10.99</td>
                <td>$8.50</td>
                <td>35</td>
                <td>Nova Scotia</td>
                <td>
                    <label><textarea id="description" name="description" rows="1" cols="30">Fresh Atlantic salmon straight from the harbours of Nova Scotia. Certified to be sustainably farmed in the open seas by local fishers. Check out our recipes to see what delicious appetizers and meals you can make with salmon.</textarea></label>
                </td>
                <td>Sarah</td>
                <td>Enabled</td>
                <td>
                    <form action="EditProduct.php">
                        <input type="submit" value="Edit">
                    </form>
                </td>
            </tr>
            <tr>
                <td><label><input type="checkbox" id="delete"></label></td>
                <td><img src="../images/snacks/kombucha.png" alt="Kombucha" style="width:50px;height:50px"</td>
                <td>5</td>
                <td>GT's Kombucha</td>
                <td>Snacks</td>
                <td>$4.79</td>
                <td>$3.00</td>
                <td>6</td>
                <td>United States</td>
                <td>
                    <label><textarea id="description" name="description" rows="1" cols="30">GT's organic and raw kombucha is guaranteed to aid your health. Kombucha is a naturally fermented tea beverage made with a SCOBY (symbiotic culture of bacteria and yeast) that helps with digestion and improving the immune system.</textarea></label>
                </td>
                <td>GT</td>
                <td>Enabled</td>
                <td>
                    <form action="EditProduct.php">
                        <input type="submit" value="Edit">
                    </form>
                </td>
            </tr>
        </table>

        <form action="EditProduct.php">
            <input type="submit" value="Add">
            <input type="submit" value="Delete">
        </form>
    </div>
</div>

<!--Footer in external file-->
<?php require "common/footer.html"; ?>
</body>


</html>