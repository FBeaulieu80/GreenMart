<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="shortcut icon" href="../favicon.ico">
    <meta name="author" content="Laura Boivin">
    <link rel="stylesheet" type="text/css" href="../css/p11.css">
    <link rel="stylesheet" type="text/css" href="../css/backstore.css">
    <title>Order List</title>
</head>
<body>
<?php require "common/header.php"; ?>
<h1>Order List </h1>
<div align="center">
    <a href="../backstore/p12.php" class="button">Add</a>
    <a href="../backstore/p12.php" class="button">Edit</a>
</div>

<?php $xml = simplexml_load_file('orders.xml'); ?>
<table marginwidth="100%" cellspacing="20" align="center">
    <tr>
        <th>Product Name</th>
        <th>Product ID</th>
        <th>Units / LBS</th>
        <th>Seller</th>
        <th>Order Date</th>
    </tr>


    <?php foreach($xml->order as $orderelement) : ?>
    <tr>
        <td><?php echo $orderelement->ProductName ; ?></td>
        <td><?php echo $orderelement->ProductID; ?></td>
        <td><?php echo $orderelement->UnitsLbs; ?></td>
        <td><?php echo $orderelement->Seller; ?></td>
        <td><?php echo $orderelement->Date; ?></td>
    </tr>
    <?php endforeach;?>

</table>

<?php


?>

<table>
    <tr><th>Enter a Product Name to Delete an Order</th></tr>
    <td>
        <input type = "text" name="deleteProductName" rows="1" cols="20">
    </td>
    <td>
        <input type = "submit" name = "delete" value = "Delete">
    </td>
</table>
<?php require "common/footer.html"; ?>
</body>

