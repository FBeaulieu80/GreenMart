<!DOCTYPE html>
<html lang="en" xmlns:style="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Sign Up | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/p6.css" />
    <meta name="author" content="Athigan Sinnathurai"/>
</head>
<body>
    <?php require_once "common/header.php"?>
    <div class="main">
        <form id="box">
            <h4 style="font-weight: bold; color: darkblue; text-align: center;">SIGNUP TO CREATE A GREEN MART ACCOUNT</h4>
            <h3 style="font-weight: bold; text-decoration: underline;">PROFILE</h3>
            <!-- TODO: All inputs should have labels.-->
            <label for="firstname">*FIRST NAME</label>
            <input type="text" name="firstname" id="firstname" required>	&nbsp;	&nbsp;
            <label for="lastname">*LAST NAME</label>
            <input type="text" name="lastname" id="lastname" required><br><br>
            <label for="address">*ADDRESS</label>
            <input style="width: 70%;" type="text" name="address" id="address" required><br><br>
            <label for="postalcode">*POSTAL CODE</label>
            <input type="text" name="postalcode" id="postalcode" required><br><br>
            <label for="email">*EMAIL</label>
            <input type="text" name="email" id="email" required> &nbsp;&nbsp;
            <label for="phone">PHONE NUMBER</label>
            <input type="text" name=phone id="phone"><br><br>
            <label for="signup_password">PASSWORD (minimum 6 characters, including numbers and letters)</label><br>
                <input type="password" value="" id="signup_password">
            <label for="showpasscb">
                <input type="checkbox" onclick="myFunction()" required>Show Password
            </label><br><br>
            <label for="signup_confirm_password">CONFIRM PASSWORD</label><br>
            <input type="password" value="" id="signup_confirm_password"><br><br>
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
          <label for="vehicle1"> Subscribe to receive email notifications on Green Mart promotions. Unsubscribe at any time.</label><br><br>
          <button type="button" class="submit" style="font-weight: bold;">FINISH PROFILE</button>
        </form>

        <p style="text-indent: 28%;">Already have a Green Mart account? <a href="p5.php">Login</a> to shop online.</p>
    </div>
</body>
<?php require_once "common/footer.html"?>
</html>
