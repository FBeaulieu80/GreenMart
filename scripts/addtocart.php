<?php

//$xmlstr = simplexml_load_file("../files/users-cart/1.xml");
//
//$xmlstr = dom_import_simplexml();

//$cartList = new SimpleXMLElement($xmlstr);
//echo $cartList->product[0]->prodName;

$productID = $_POST["id"];
$prodName = $_POST["prodName"];
$aisle = $_POST["aisle"];
$price = $_POST["price"];
$discount = $_POST["discount"];
$quantity = $_POST["quantity"];
$origin = $_POST["origin"];
$description = $_POST["description"];
$seller = $_POST["seller"];
$status = $_POST["status"];
$cherryType = $_POST["cherryType"];
$organic = $_POST["organic"];

echo "Data successfully sent via POST";

// Create new file
$xml = new DOMDocument();
$xml->formatOutput = true;
$xml_cart = $xml->createElement("cartList");
$xml_product = $xml->createElement("product");
$xml_prodID = $xml->createElement("id");
$xml_prodID->nodeValue = $productID;
$xml_prodName = $xml->createElement("prodName");
$xml_prodName->nodeValue = $prodName;
$xml_aisle = $xml->createElement("aisle");
$xml_aisle->nodeValue = $aisle;
$xml_price = $xml->createElement("price");
$xml_price->nodeValue = $price;
$xml_discount = $xml->createElement("discount");
$xml_discount->nodeValue = $discount;
$xml_quantity = $xml->createElement("quantity");
$xml_quantity->nodeValue = $quantity;
$xml_origin = $xml->createElement("origin");
$xml_origin->nodeValue = $origin;
$xml_description = $xml->createElement("description");
$xml_description->nodeValue = $description;
$xml_seller = $xml->createElement("seller");
$xml_seller->nodeValue = $seller;
$xml_status = $xml->createElement("status");
$xml_status->nodeValue = $status;
$xml_cherryType = $xml->createElement("cherryType");
$xml_cherryType->nodeValue = $cherryType;
$xml_organic = $xml->createElement("organic");
$xml_organic->nodeValue = $organic;

$xml_product->appendChild( $xml_prodID );
$xml_product->appendChild( $xml_prodName );
$xml_product->appendChild( $xml_aisle );
$xml_product->appendChild( $xml_price );
$xml_product->appendChild( $xml_discount );
$xml_product->appendChild( $xml_quantity );
$xml_product->appendChild( $xml_origin );
$xml_product->appendChild( $xml_description );
$xml_product->appendChild( $xml_seller );
$xml_product->appendChild( $xml_status );
$xml_product->appendChild( $xml_cherryType );
$xml_product->appendChild( $xml_organic );
$xml_cart->appendChild( $xml_product );
$xml->appendChild( $xml_cart );

$xml->save("../files/users-cart/2.xml");

// Load and write to file
//$xml = new DOMDocument();
//$xml->load('../files/users-cart/2.xml');
//$nodes = $xml->getElementsByTagName('cartList') ;
//if ($nodes->length > 0) {
//    //insert some stuff using appendChild()
//}
//
////re-save
//$xml->save("/tmp/test.xml");

header('Location: ' . $_SERVER['HTTP_REFERER']);

// Process:
// 0. if user not signed in, redirect to login page
// 1. receive data from GET / POST
// 2. convert to an object
// 3. conect with user account
// 4. write to an XML file
// 5. return to page