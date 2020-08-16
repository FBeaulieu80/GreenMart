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
if (isset($_POST['edit'])){
    $source = simplexml_load_file('orders.xml');

    $name2 = htmlentities($_POST['editProductName']);
    $ID2 = htmlentities($_POST['editProductID']);
    $unitslb2 = htmlentities($_POST['editUnitsLbs']);
    $seller2 = htmlentities($_POST['editSeller']);
    $date2 = htmlentities($_POST['editOrderDate']);

    foreach($source->order as $order2) {
        if ((string)$order2->ProductName == $name2){
            $order2->ProductID = $ID2;
            $order2-> UnitsLbs = $unitslb2;
            $order2->Seller = $seller2;
            $order2->Date = $date2;
        }
        else{
            $message = $name2 . " not found in orders. Please try again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            break;
        }
    }
    file_put_contents("orders.xml", $source->saveXML());

}
?>



<h1 align="center">Add an Order<br/></h1>

<div class=editOrder>
    <form action = "p12.php" method = "post">

    <table marginwidth="100%" cellspacing="20" align="center">

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
                <td>
            <input type = "submit" name = "save" value = "Save">
                </td>
            </tr>
    </table>
        <h1 align="center">Edit an Order<br/></h1>
        <table marginwidth="100%" cellspacing="20" align="center">

            <tr>
                <th>Enter Product Name </br> & reset the fields below:</th>
                <td>
                    <input type = "text" name="editProductName" rows="1" cols="20">
                </td>
            </tr>
            <tr>
                <th>Product ID:</th>
                <td>
                    <input type = "text" name="editProductID" rows="1" cols="20">
                </td>
            </tr>
            <tr>
                <th>Units / LBS:</th>
                <td>
                    <input type = "text" name="editUnits/LBS" rows="1" cols="20">
                </td>
            </tr>
            <tr>
                <th>Seller:</th>
                <td>
                    <input type = "text" name="editSeller" rows="1" cols="20">
                </td>
            </tr>
            <tr>
                <th>Order Date:</th>
                <td>
                    <input type = "text" name="editOrderDate" rows="1" cols="20">
                </td>
            </tr>

            <tr>
                <td>
                    <input type = "submit" name = "edit" value = "Edit">
                </td>
            </tr>
        </table>





    <?php require "common/footer.html"; ?>
</div>
</form>

</body>


