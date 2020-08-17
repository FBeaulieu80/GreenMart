<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="favicon.ico">
    <meta charset="UTF-8">
    <title>Sign Up | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/p6.css"/>
    <meta name="author" content="Athigan Sinnathurai"/>
</head>
<body>
<?php
    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
    header("Pragma: no-cache"); // HTTP 1.0.
    header("Expires: 0"); // Proxies.
    include "common/header.php" ?>
<ul class="breadcrumb">
    <li><a href="index.php">Store</a></li>
    <li>Sign Up</li>
</ul>
<div class="main">
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET["login"]) && $_GET["login"] == "Unknown User") {
                echo "<h3>Unknown User, if you would like to create an account, please fill the form below.</h3>";
            }
        }
    ?>
    <form id="box" action="backstore/GreenMartUserAccounts.php" target="_blank" method="post">
            <h4 style="font-weight: bold; color: darkblue; text-align: center;">SIGNUP TO CREATE A GREEN MART ACCOUNT</h4>
            <h3 style="font-weight: bold; text-decoration: underline;">PROFILE</h3>
            <label>
                FIRST NAME
                <input type="text" name="firstName" required>
            </label> <br><br>
            <label>
                MIDDLE NAME
                <input type="text" name="middleName">
            </label><br><br>
            <label>
                LAST NAME
                <input type="text" name="lastName" required>
            </label><br><br>
            <label>
                EMAIL
                <input type="text" name="email" required>
            </label><br><br>
            <label>
                FULL ADDRESS
                <input style="width: 70%;" type="text" name="fullAddress" required>
            </label><br><br>
            <label>
                PHONE NUMBER
                <input type="text" name="phoneNumber">
            </label><br><br>
            <label>
                PASSWORD (minimum 6 characters)<br>
                <input type="password" name="password" value="" id="signup_password">
            </label>
            <label>
                <input type="checkbox" onclick="myFunction()" required>
                Show Password
            </label><br><br>
            <label>
                CONFIRM PASSWORD<br>
                <input type="password" value="" id="signup_confirm_password">
            </label><br><br>
        <script>
            function myFunction() {
                const x = document.getElementById("signup_password");
                const y = document.getElementById("signup_confirm_password");
                if (x.type === "password") {
                    x.type = y.type = "text";
                } else {
                    x.type = y.type = "password";
                }
            }
        </script>
        <input type="checkbox" name="label">
        <label for="label"> Subscribe to receive email notifications on Green Mart promotions. Unsubscribe at any
            time.</label><br><br>
        <button type="submit" name="submit" id="submit" style="font-weight: bold;">FINISH PROFILE</button>
    </form>
    <p style="text-align: center;">Already have a Green Mart account? <a href="p5.php">Login</a> to shop online.</p>
</div>
</body>
<?php include "common/footer.php" ?>
</html>
