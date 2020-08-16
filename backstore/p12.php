<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="../css/p12.css">
<link rel="stylesheet" type="text/css" href="../css/backstore.css">
<head>

    <link rel="shortcut icon" href="../favicon.ico">
    <meta name="author" content="Laura Boivin">
    <title>Order List</title>
</head>

<?php require "common/header.php"; ?>
<body widthmargin="100%">
<?php

if (isset($_POST['save']))
{
$xml = new DOMDocument("1.0");
$xml->load('orders.xml');
$xml-> formatOutput =true;

$name = htmlentities($_POST['ProductName']);
$ID = htmlentities($_POST['ProductID']);
$unitslbs = htmlentities($_POST['Units/LBS']);
$seller = htmlentities($_POST['Seller']);
$date = htmlentities($_POST['OrderDate']);

    $rootTag = $xml->getElementsByTagName('orders')->item(0);
    //$xml->appendChild($rootTag);

    $dataTag = $xml->createElement("order");
    $rootTag->appendChild($dataTag);

    $nameTag = $xml->createElement("ProductName", $name);
    $dataTag->appendChild($nameTag);

    $idTag = $xml->createElement("ProductID" , $ID );
    $dataTag->appendChild($idTag);

    $unitsTag = $xml->createElement("UnitsLbs" ,$unitslbs );
    $dataTag->appendChild($unitsTag);

    $sellerTag = $xml->createElement("Seller" , $seller );
    $dataTag->appendChild($sellerTag);

    $dateTag = $xml->createElement("Date" , $date);
    $dataTag->appendChild($dateTag);

    file_put_contents($xml->save('orders.xml'), FILE_APPEND );

}
?>

<h1 align="center">Add an Order<br/></h1>
<!--
<form method="post" action="">
  <?php /*
    echo "<select name = edit>";
    $xml = simplexml_load_file('orders.xml');
    foreach($xml->order as $order){
        echo "<option value='".$order->ProductName."'>"  . $order-> ProductName . "</option>";
    }
    echo "</select>"*/
    ?>
</form>
-->
<div class=editOrder>


    <table marginwidth="100%" cellspacing="20" align="center">
        <form action = "p12.php" method = "post">
        <tr>
            <th>Product Name:</th>
            <td>
                <input type = "text" name="ProductName" rows="1" cols="20">
            </td>
        </tr>
        <tr>
            <th>Product ID:</th>
            <td>
                <input type = "text" name="ProductID" rows="1" cols="20">
            </td>
        </tr>
        <tr>
            <th>Units / LBS:</th>
            <td>
                    <input type = "text" name="Units/LBS" rows="1" cols="20">
            </td>
        </tr>
        <tr>
            <th>Seller:</th>
            <td>
                    <input type = "text" name="Seller" rows="1" cols="20">
            </td>
        </tr>
        <tr>
            <th>Order Date:</th>
            <td>
                    <input type = "text" name="OrderDate" rows="1" cols="20">
            </td>
        </tr>
        <tr>
            <th> Arrived:</th>
            <td>
                        <select name="answer">
                            <option>No</option>
                            <option>Yes</option>
                        </select>
            </td>
        </tr>
            <tr>
                <td>
            <input type = "submit" name = "save" value = "Save">
                </td>
            </tr>
    </table>

    <h1 align="center">Edit an Order<br/></h1>






    <?php require "common/footer.html"; ?>
</div>
</form>

</body>


