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
                    <th>Discounted Price</th>
                    <th>Quantity</th>
                    <th>Origin</th>
                    <th>Description</th>
                    <th>Seller</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td><input type="button" value="Upload"></td>
                    <td>1</td>
                    <td><input type="text" name="Product-Name" placeholder="Product Name" size="15"></td>
                    <td><input type="text" name="Aisle" placeholder="Aisle" size="15"></td>
                    <td><input type="text" name="Price" placeholder="Price" size="15"></td>
                    <td><input type="text" name="Discounted-Price" placeholder="Discounted Price" size="15"></td>
                    <td><input type="number" name="Quantity" placeholder="Quantity" size="15"></td>
                    <td><input type="text" name="Origin" placeholder="Origin" size="15"></td>
                    <td><input type="text" name="Description" placeholder="Description" size="15"></td>
                    <td><input type="text" name="Seller" placeholder="Seller" size="15"></td>
                    <td><input type="text" name="Status" placeholder="Status" size="15"></td>
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