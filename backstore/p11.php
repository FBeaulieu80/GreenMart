<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="shortcut icon" href="../favicon.ico">
    <meta name="author" content="Laura Boivin">
    <link rel="stylesheet" type="text/css" href="../css/p11.css">
    <link rel="stylesheet" type="text/css" href="../css/backstore.css">
    <title>Order List | Back Store | Green Mart</title>
</head>
<?php require $_SERVER["DOCUMENT_ROOT"]."backstore/common/authenticate.php"; ?>
<body>
<?php require $_SERVER["DOCUMENT_ROOT"]."backstore/common/header.php";

if (isset($_POST['delete'])) {

    $xml = simplexml_load_file("orders.xml");

    $name2 = htmlentities($_POST['deleteProductName']);

    $toDelete = array();

    foreach ($xml->order as $order2){
        if ($name2 == (string)$order2->ProductName){
            $toDelete[] = $order2;
        }
    }

    foreach($toDelete as $order2){
        $dom = dom_import_simplexml($order2);
        $dom->parentNode->removeChild($dom);
    }
    echo $xml->asXML("orders.xml");
}
?>
<div id="box">
    <div class="main" style="text-align: center">
        <h1>Order List </h1>
    <div class="grid-container">
        <div class="grid-item">
            <div class="col">
<form action = "p11.php" method = "post">

<div align="center">
    <a href="../backstore/p12.php" class="addbutton" name = "add">Add</a>
    <a href="../backstore/p12.php" class="addbutton" name = "add">Edit</a>
</div>

<?php $xml = simplexml_load_file('orders.xml'); ?>
<table cellspacing="20" align="center">
    <tr>
        <th colspan="3">Product Name</th>
        <th colspan="3">Product ID</th>
        <th colspan="4">Units / LBS</th>
        <th colspan="3">Seller</th>
        <th colspan="3">Order Date</th>
    </tr>


    <?php foreach($xml->order as $orderelement) : ?>
    <tr>
        <td colspan="3"><?php echo $orderelement->ProductName ; ?></td>
        <td colspan="3"><?php echo $orderelement->ProductID; ?></td>
        <td colspan="4"><?php echo $orderelement->UnitsLbs; ?></td>
        <td colspan="3"><?php echo $orderelement->Seller; ?></td>
        <td colspan="3" ><?php echo $orderelement->Date; ?></td>
    </tr>

    <?php endforeach;?>
    <tr></tr><tr></tr>

    <tr><th colspan="5">Enter a Product Name to Delete an Order</th></tr>
    <td colspan="5">
        <label>
            <input class = "textbox" type = "text" name="deleteProductName" rows="1" cols="20">
        </label>

        <input class = "button" type = "submit" name = "delete" value = "Delete" >
    </td>

</table>
</form>


</div>
        </div>
        </div>
    </div>
</div>
<?php require $_SERVER["DOCUMENT_ROOT"]."backstore/common/footer.html"; ?>
</body>

