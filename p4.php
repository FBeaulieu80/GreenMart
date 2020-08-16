<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="favicon.ico">
    <meta name="author" content="Laura Boivin">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/p4.css">
    <script src="scripts/p4.js" async></script>
    <title>Shopping Cart (4) | Green Mart</title>
</head>

<?php
$valid_passwords = array ("marker" => "admin");
$valid_users = array_keys($valid_passwords);

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

if (!$validated) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    die ("Not authorized");
}
?>

<body marginwidth="100%" onload="remember();">
<?php require "common/header.php"; ?>
<?php
echo "<p>Welcome $user.</p>";
echo "<p>Congratulations, you have accessed the shopping cart!</p>";
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
                            <th class="img-with-text">

                                <h3>Carrot Cake</h3>
                                <img id="food" src="images/bakery/carrot-cake.jpg" alt="Carrot Cake"><br><br>
                                <span id="subtotal1"> $11.99 </span><br><br>
                                <button id="add" onclick="addQuantity1()">+</button>
                                <label><input type="text" value=1 id="number1" readonly></label>
                                <button id="subtract" onclick="subtractQuantity1()">-</button>
                                <br/>
                                <button id="delete1" onclick="removeItem1()">Remove Item</button>
                                <br><br>

                            </th>
                        </tr>

                        <tr valign="top">
                            <th class="img-with-text">

                                <h3>Cheddar Cheese</h3>
                                <img id="food" src="images/dairy-eggs/cheddar.jpg" alt="Cheddar Cheese"><br><br>
                                <span id="subtotal2"> $3.29 </span><br><br>
                                <button id="add" onclick="addQuantity2()">+</button>
                                <label><input type="text" value=1 id="number2" readonly></label>
                                <button id="subtract" onclick="subtractQuantity2()">-</button>
                                <br/>
                                <button id="delete2" onclick="removeItem2()">Remove Item</button>
                                <br><br>

                            </th>
                        </tr>


                        <tr valign="top">
                            <th class="img-with-text">

                                <h3>Rainer Cherries</h3>
                                <img id="food" src="images/fruit-veg/rainier-cherry.jpg" alt="Rainer Cherries"><br><br>
                                <span id="subtotal3"> $4.99 </span><br><br>
                                <button id="add" onclick="addQuantity3()">+</button>
                                <label><input type="text" value=1 id="number3" readonly></label>
                                <button id="subtract" onclick="subtractQuantity3()">-</button>
                                <br/>
                                <button id="delete3" onclick="removeItem3()">Remove Item</button>
                                <br><br>
                            </th>
                        </tr>

                        <tr valign="top">
                            <th class="img-with-text">

                                <h3>Roast Chicken</h3>
                                <img id="food" src="images/meat/chicken.jpg" alt="Roast Chicken"><br><br>
                                <span id="subtotal4"> $9.99 </span><br><br>
                                <button id="add" onclick="addQuantity4()">+</button>
                                <label><input type="text" value=1 id="number4" readonly></label>
                                <button id="subtract" onclick="subtractQuantity4()">-</button>
                                <br/>
                                <button id="delete4" onclick="removeItem4()">Remove Item</button>
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
