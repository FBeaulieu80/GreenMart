<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="../favicon.ico">
    <meta name="author" content="Michael Rowe">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta charset="UTF-8">
    <title>Edit Product</title>
    <!--<link rel="stylesheet" type="text/css" href="../css/main.css" />-->
    <link rel="stylesheet" type="text/css" href="../css/p8.css"/>
    <link rel="stylesheet" type="text/css" href="../css/backstore.css"/>
</head>


<body>
<!-- Header in external file -->
<?php require "common/header.php"; ?>
<div class="main">
    <h2>Edit Product</h2>
    <div id="edit-product" class="product-table">
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
                    <td><label><input type="text" name="Product-Name" placeholder="Product Name" size="11">        </label></td>
                    <td><label><input type="text" name="Aisle" placeholder="Aisle" size="10">                      </label></td>
                    <td><label><input type="text" name="Price" placeholder="Price" size="10">                      </label></td>
                    <td><label><input type="text" name="Discounted-Price" placeholder="Discounted Price" size="11"></label></td>
                    <td><label><input type="number" name="Quantity" placeholder="Quantity" size="10">              </label></td>
                    <td><label><input type="text" name="Origin" placeholder="Origin" size="10">                    </label></td>
                    <td><label><input type="text" name="Description" placeholder="Description" size="10">          </label></td>
                    <td><label><input type="text" name="Seller" placeholder="Seller" size="10">                    </label></td>
                    <td><label><input type="text" name="Status" placeholder="Status" size="10">                    </label></td>
                    <td><input type="submit" value="Submit">                                                </td>
                </tr>
            </table>
        </form>

    </div>
</div>

<!--Footer in external file-->
<?php require "common/footer.html"; ?>
</body>


</html>