<!DOCTYPE html>
<html lang="en">

<link rel = "stylesheet" type = "text/css" href="../css/p12.css">
<link rel="stylesheet" type = "text/css" href="../css/backstore.css">
<head>
    <meta name="author" content="Laura Boivin">
    <title>Order List</title>
</head>

<?php require "common/header.php"; ?>
<body widthmargin = "100%">
<h1 align = "center">Edit Order List<br/></h1>

<form action = "" >
    <select name = "editProduct" >
        <option>New Product</option>
        <option>Organic Banana</option>
        <option>Yummy Chickpeas</option>
        <option>Cherry Tomatoes</option>
        <option>Jimmy's Natural Potato Chips</option>
    </select>
</form>

<div class = editOrder>
    <table marginwidth="100%" cellspacing = "20" align = "center">
        <tr>
            <th>Product Name:</th>
            <td><form action = "">
                    <textarea name = "Product Name" rows = "1" cols="20"></textarea>
                </form></td>
        </tr>
        <tr>
            <th>Product ID:</th>
            <td><form action = "">
                    <textarea name = "Product ID" rows = "1" cols="20"></textarea>
                </form></td>
        </tr>
        <tr>
            <th>Units / LBS:</th>
            <td><form action = "">
                    <textarea name = "Units / LBS" rows = "1" cols="20"></textarea>
                </form></td>
        </tr>
        <tr>
            <th>Seller:</th>
            <td><form action = "">
                    <textarea name = "Seller" rows = "1" cols="20"></textarea>
                </form></td>
        </tr>
        <tr>
            <th>Order Date:</th>
            <td><form action = "">
                    <textarea name = "Order Date" rows = "1" cols="20"></textarea>
                </form></td>
        </tr>
        <tr>
            <th> Arrived:</th>
            <td>  <form action = "">
                    <select name = "answer"><option>No</option><option>Yes</option> </select></form></td>
        </tr>
    </table>

    <button>Save</button>


</div>







</body>

<?php require "common/footer.html"; ?>

