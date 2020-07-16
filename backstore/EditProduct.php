<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="Michael">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta charset="UTF-8">
    <title>Edit Product</title>
    <!--<link rel="stylesheet" type="text/css" href="../css/main.css" />-->
    <link rel="stylesheet" type="text/css" href="../css/p7.css" />
    <link rel="stylesheet" type="text/css" href="../css/backstore.css" />
</head>

<!-- Header in external file -->
<?php require "common/header.php"; ?>

<body>
<div class="main">
    <div id="product-list" class="product-table">
        <form action="ProductList.php">
            <table style="width:100%">
                <tr>
                    <th>Image</th>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Aisle</th>
                    <th>Price</th>
                    <th>Sale Price</th>
                    <th>Quantity</th>
                    <th>Location</th>
                    <th>Description</th>
                    <th>Seller</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td><img src="../images/bakery/baguette.jpg" alt="Baguette" style="width:50px;height:50px"</td>
                    <td>1</td>
                    <td><input type="text" size="15"></td>
                    <td><input type="text" size="15"></td>
                    <td><input type="text" size="15"></td>
                    <td><input type="text" size="15"></td>
                    <td><input type="number" size="15"></td>
                    <td><input type="text" size="15"></td>
                    <td><input type="text" size="15"></td>
                    <td><input type="text" size="15"></td>
                    <td><input type="text" size="15"></td>
                    <td><input type="submit" value="Submit"></td>
                </form>
            </tr>
        </table>
    </div>
</div>

</body>

<!--Footer in external file-->
<?php require "common/footer.html"; ?>

</html>