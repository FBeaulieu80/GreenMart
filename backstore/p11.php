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
<div id="box">
    <div class="grid-container">
        <div class="grid-item">
<?php

$valid_passwords = array ("marker" => "isadmin");
$valid_users = array_keys($valid_passwords);

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

if (!$validated) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    die ("Not authorized");
}

// If arrives here, is a valid user.
echo "<p>Welcome $user.</p>";
echo "<p>Congratulation, you have accessed the order list - P11.</p>";

?>

<?php

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
<form action = "p11.php" method = "post">
<h1>Order List </h1>
<div align="center">
    <a href="../backstore/p12.php" class="button" name = "add">Add</a>
    <a href="../backstore/p12.php" class="button" name = "add">Edit</a>
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
    <tr></tr><tr></tr>

    <tr><th>Enter a Product Name to Delete an Order</th></tr>
    <td>
        <input type = "text" name="deleteProductName" rows="1" cols="20">

        <input class = "button" type = "submit" name = "delete" value = "Delete" >
    </td>

</table>
</form>


<?php require "common/footer.html"; ?>
        </div>
        </div>
</div>
</body>

