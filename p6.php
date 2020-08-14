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
<?php require_once "common/header.php" ?>
<div class="main">
    <form id="box">
        <h4 style="font-weight: bold; color: darkblue; text-align: center;">SIGNUP TO CREATE A GREEN MART ACCOUNT</h4>
        <h3 style="font-weight: bold; text-decoration: underline;">PROFILE</h3>
        <label>
            *FIRST NAME
            <input type="text" name="firstname" id="firstname" required>
        </label> <br><br>
        <label>
            *LAST NAME
            <input type="text" name="lastname" id="lastname" required>
        </label><br><br>
        <label>
            *ADDRESS
            <input style="width: 70%;" type="text" name="address" id="address" required>
        </label><br><br>
        <label>
            *POSTAL CODE
            <input type="text" name="postalcode" id="postalcode" required>
        </label><br><br>
        <label>
            *EMAIL
            <input type="text" name="email" id="email" required>
        </label><br><br>
        <label>
            PHONE NUMBER
            <input type="text" name=phone id="phone">
        </label><br><br>
        <label>
            PASSWORD (minimum 6 characters, including numbers and letters)<br>
            <input type="password" value="" id="signup_password">
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


        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle1"> Subscribe to receive email notifications on Green Mart promotions. Unsubscribe at any
            time.</label><br><br>
        <button type="button" class="submit" style="font-weight: bold;">FINISH PROFILE</button>
    </form>

    <p style="text-align: center;">Already have a Green Mart account? <a href="p5.php">Login</a> to shop online.</p>
</div>
</body>
<?php require_once "common/footer.php" ?>
</html>
