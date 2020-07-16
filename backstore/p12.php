<!DOCTYPE html>
<html lang="en">

<link rel = "stylesheet" type = "text/css" href="../css/p12.css">
<link rel="stylesheet" type = "text/css" href="../css/backstore.css">
<head>
    <title>Order List</title>
</head>

<?php require "common/header.php"; ?>
<body widthmargin = "100%">
<h1 align = "center">Edit Order List<br/>
<button>Save</button></h1>

    <form action = "">
    Product Name:
    <textarea name = "Product Name" rows = "1" cols="20"></textarea>
    </form>

    <form action = "">
            Product ID:
            <textarea name = "Product ID" rows = "1" cols="20"></textarea>
    </form>

    <form action = "">

            Units / LBS:
            <textarea name = "Units / LBS" rows = "1" cols="20"></textarea>

    </form>

    <form action = "">

            Seller:
            <textarea name = "Seller" rows = "1" cols="20"></textarea>

    </form>

    <form action = "">

            Order Date:
            <textarea name = "Order Date" rows = "1" cols="20"></textarea>

    </form>

    <form action = "">
    Arrived:
        <select name = "answer"><option>No</option><option>Yes</option> </select></form>

    <form action = "">
        <select name = "editProduct">
            <option>New Product</option>
            <option>Organic Banana</option>
            <option>Yummy Chickpeas</option>
            <option>Cherry Tomatoes</option>
            <option>Jimmy's Natural Potato Chips</option>
        </select>
    </form>








</body>

<?php require "common/footer.html"; ?>

