<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="favicon.ico">
    <meta name="author" content="Laura Boivin">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/p4.php">
    <script src="scripts/p4.js" async></script>
    <title>Shopping Cart (4) | Green Mart</title>

</head>

<?php
include "backstore/common/authenticate.php";
//$valid_passwords = array ("marker" => "isadmin");
//$valid_users = array_keys($valid_passwords);
//
//$user = $_SERVER['PHP_AUTH_USER'];
//$pass = $_SERVER['PHP_AUTH_PW'];
//
//$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);
//
//if (!$validated) {
//    header('WWW-Authenticate: Basic realm="My Realm"');
//    header('HTTP/1.0 401 Unauthorized');
//    die ("Not authorized");
//}
?>

<body marginwidth="100%" onload="remember();">
<?php require "common/header.php"; ?>
<?php
echo "<p>Welcome</p>";
echo "<p>Congratulations, you have accessed the shopping cart!</p>";

$xml=simplexml_load_file("files/cart.xml");
// This was to hide/display cart items but it doesnt work :)
//$value0 = "none";
//$value1 = "none";
//$value2 = "none";
//$value3 = "none";
//$value4 = "none";
//$value5 = "none";
//$value6 = "none";
//$value7 = "none";
//$value8 = "none";
//$value9 = "none";
//
//for ($i = 0; $i < $xml->count(); $i++){
//    if($xml->product[$i]->prodName != ""){
//        switch ($i){
//            case 0:
//                $value0 = "table-row";
//                break;
//            case 1:
//                $value1 = "table-row";
//                break;
//            case 2:
//                $value2 = "table-row";
//                break;
//            case 3:
//                $value3 = "table-row";
//                break;
//            case 4:
//                $value4 = "table-row";
//                break;
//            case 5:
//                $value5 = "table-row";
//                break;
//            case 6:
//                $value6 = "table-row";
//                break;
//            case 7:
//                $value7 = "table-row";
//                break;
//            case 8:
//                $value8 = "table-row";
//                break;
//            case 9:
//                $value9 = "table-row";
//                break;
//        }
//    }
//}
?>

<div id="box">
    <div class="main" style="text-align: center">
        <div class="grid-container">
            <div class="grid-item">
                <div class="col">

                    <form action="aisles/index.php">
                        <button class="continue">Continue Shopping</button>
                    </form>

                    <h1 align="center">My Shopping Cart</h1>


                    <table align="center" cellspacing="20">

                        <tr valign="top" id="checkout">
                            <th>

                                <br>
                                <button onclick="checkOut()"> Checkout Now</button>
                                <h3> Your Order Summary</h3>

                                <span id="orderTitle">Subtotal:</span>
                                <span id="allSubtotal">$30.26</span><br>

                                <span id="orderTitle">QST:</span>
                                <span id="qst">$3.02</span><br>

                                <span id="orderTitle">GST:</span>
                                <span id="gst">$0.60</span><br><br>

                                <button id=total onclick="calculateTotal()">Calculate Total:</button>
                                <br><br>
                                <span id="totalcost"></span><br><br>

                            </th>
                        </tr>

                        <tr valign="top" id="itemBlock">
                            <th class="img-with-text" id="cart0">

                                <h3 id="prodName"><?= $xml->product[0]->prodName?></h3>
                                <img id="food" src="<?= $xml->product[0]->image?>"><br><br>
                                <span id="subtotal1">$<?= $xml->product[0]->price?></span><br><br>
                                <button id="add" onclick="addQuantity1()">+</button> <!-- TODO updates XML -->
                                <label><input type="text" value="<?= $xml->product[0]->quantity?>" id="number1" readonly></label>
                                <button id="subtract" onclick="subtractQuantity1()">-</button> <!-- TODO updates XML -->
                                <br/>
                                <button id="delete1" onclick="removeItem1()">Remove Item</button> <!-- TODO updates XML -->
                                <br><br>

                            </th>
                        </tr>

                        <tr valign="top">
                            <th class="img-with-text" id="cart1">

                                <h3><?= $xml->product[1]->prodName?></h3>
                                <img id="food" src="<?= $xml->product[1]->image?>"><br><br>
                                <span id="subtotal2"> $<?= $xml->product[1]->price?> </span><br><br>
                                <button id="add" onclick="addQuantity2()">+</button>
                                <label><input type="text" value="<?= $xml->product[1]->quantity?>" id="number2" readonly></label>
                                <button id="subtract" onclick="subtractQuantity2()">-</button>
                                <br/>
                                <button id="delete2" onclick="removeItem2()">Remove Item</button>
                                <br><br>

                            </th>
                        </tr>


                        <tr valign="top">
                            <th class="img-with-text" id="cart2">

                                <h3><?= $xml->product[2]->prodName?></h3>
                                <img id="food" src="<?= $xml->product[2]->image?>"><br><br>
                                <span id="subtotal3"> $<?= $xml->product[2]->price?> </span><br><br>
                                <button id="add" onclick="addQuantity3()">+</button>
                                <label><input type="text" value="<?= $xml->product[2]->quantity?>" id="number3" readonly></label>
                                <button id="subtract" onclick="subtractQuantity3()">-</button>
                                <br/>
                                <button id="delete3" onclick="removeItem3()">Remove Item</button>
                                <br><br>
                            </th>
                        </tr>

                        <tr valign="top">
                            <th class="img-with-text" id="cart3">

                                <h3><?= $xml->product[3]->prodName?></h3>
                                <img id="food" src="<?= $xml->product[3]->image?>"><br><br>
                                <span id="subtotal4"> $<?= $xml->product[3]->price?> </span><br><br>
                                <button id="add" onclick="addQuantity4()">+</button>
                                <label><input type="text" value="<?= $xml->product[3]->quantity?>" id="number4" readonly></label>
                                <button id="subtract" onclick="subtractQuantity4()">-</button>
                                <br/>
                                <button id="delete4" onclick="removeItem4()">Remove Item</button>
                                <br><br>
                            </th>
                        </tr>

                        <tr valign="top" id="itemBlock">
                            <th class="img-with-text" id="cart4">

                                <h3 id="prodName"><?= $xml->product[4]->prodName?></h3>
                                <img id="food" src="<?= $xml->product[4]->image?>"><br><br>
                                <span id="subtotal1">$<?= $xml->product[4]->price?></span><br><br>
                                <button id="add" onclick="addQuantity1()">+</button> <!-- TODO updates XML -->
                                <label><input type="text" value="<?= $xml->product[4]->quantity?>" id="number1" readonly></label>
                                <button id="subtract" onclick="subtractQuantity1()">-</button> <!-- TODO updates XML -->
                                <br/>
                                <button id="delete1" onclick="removeItem1()">Remove Item</button> <!-- TODO updates XML -->
                                <br><br>

                            </th>
                        </tr>

                        <tr valign="top" id="itemBlock">
                            <th class="img-with-text" id="cart5">

                                <h3 id="prodName"><?= $xml->product[5]->prodName?></h3>
                                <img id="food" src="<?= $xml->product[5]->image?>"><br><br>
                                <span id="subtotal1">$<?= $xml->product[5]->price?></span><br><br>
                                <button id="add" onclick="addQuantity1()">+</button> <!-- TODO updates XML -->
                                <label><input type="text" value="<?= $xml->product[5]->quantity?>" id="number1" readonly></label>
                                <button id="subtract" onclick="subtractQuantity1()">-</button> <!-- TODO updates XML -->
                                <br/>
                                <button id="delete1" onclick="removeItem1()">Remove Item</button> <!-- TODO updates XML -->
                                <br><br>

                            </th>
                        </tr>

                        <tr valign="top" id="itemBlock">
                            <th class="img-with-text" id="cart6">

                                <h3 id="prodName"><?= $xml->product[6]->prodName?></h3>
                                <img id="food" src="<?= $xml->product[6]->image?>"><br><br>
                                <span id="subtotal1">$<?= $xml->product[6]->price?></span><br><br>
                                <button id="add" onclick="addQuantity1()">+</button> <!-- TODO updates XML -->
                                <label><input type="text" value="<?= $xml->product[6]->quantity?>" id="number1" readonly></label>
                                <button id="subtract" onclick="subtractQuantity1()">-</button> <!-- TODO updates XML -->
                                <br/>
                                <button id="delete1" onclick="removeItem1()">Remove Item</button> <!-- TODO updates XML -->
                                <br><br>

                            </th>
                        </tr>

                        <tr valign="top" id="itemBlock">
                            <th class="img-with-text" id="cart7">

                                <h3 id="prodName"><?= $xml->product[7]->prodName?></h3>
                                <img id="food" src="<?= $xml->product[7]->image?>"><br><br>
                                <span id="subtotal1">$<?= $xml->product[7]->price?></span><br><br>
                                <button id="add" onclick="addQuantity1()">+</button> <!-- TODO updates XML -->
                                <label><input type="text" value="<?= $xml->product[7]->quantity?>" id="number1" readonly></label>
                                <button id="subtract" onclick="subtractQuantity1()">-</button> <!-- TODO updates XML -->
                                <br/>
                                <button id="delete1" onclick="removeItem1()">Remove Item</button> <!-- TODO updates XML -->
                                <br><br>

                            </th>
                        </tr>

                        <tr valign="top" id="itemBlock">
                            <th class="img-with-text" id="cart8">

                                <h3 id="prodName"><?= $xml->product[8]->prodName?></h3>
                                <img id="food" src="<?= $xml->product[8]->image?>"><br><br>
                                <span id="subtotal1">$<?= $xml->product[8]->price?></span><br><br>
                                <button id="add" onclick="addQuantity1()">+</button> <!-- TODO updates XML -->
                                <label><input type="text" value="<?= $xml->product[8]->quantity?>" id="number1" readonly></label>
                                <button id="subtract" onclick="subtractQuantity1()">-</button> <!-- TODO updates XML -->
                                <br/>
                                <button id="delete1" onclick="removeItem1()">Remove Item</button> <!-- TODO updates XML -->
                                <br><br>

                            </th>
                        </tr>

                        <tr valign="top" id="itemBlock">
                            <th class="img-with-text" id="cart9">

                                <h3 id="prodName"><?= $xml->product[9]->prodName?></h3>
                                <img id="food" src="<?= $xml->product[9]->image?>"><br><br>
                                <span id="subtotal1">$<?= $xml->product[9]->price?></span><br><br>
                                <button id="add" onclick="addQuantity1()">+</button> <!-- TODO updates XML -->
                                <label><input type="text" value="<?= $xml->product[9]->quantity?>" id="number1" readonly></label>
                                <button id="subtract" onclick="subtractQuantity1()">-</button> <!-- TODO updates XML -->
                                <br/>
                                <button id="delete1" onclick="removeItem1()">Remove Item</button> <!-- TODO updates XML -->
                                <br><br>

                            </th>
                        </tr>


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require "common/footer.php"; ?>
</body>
</html>
