<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="favicon.ico">
    <meta charset="UTF-8">
    <title>Log In | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/p5.css"/>
    <meta name="author" content="Athigan Sinnathurai"/>
</head>
<body>
<?php require_once $_SERVER["DOCUMENT_ROOT"]."common/header.php" ?>
<div class="main">
    <form id="box" action="backstore/common/authenticate.php" method="post" >
        <h4 style="font-weight: bold; color: darkblue;text-align: center;">LOG IN TO YOUR GREEN MART ACCOUNT</h4>
        <label>
            Email:
            <input type="text" name="username" required autofocus>
        </label><br><br>
        <label>
            Password:
            <input type="password" name="password" value="" id="login_password" required>
        </label><br><br>
        <label>
            <input type="checkbox" id="showpasscb" onclick="myFunction()">
            Show Password
        </label><br><br>
        <script>
            function myFunction() {
                const x = document.getElementById("login_password");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
        <button type="submit" class="submit" style="font-weight: bold;">Submit</button>
        <button type="button" class="forgotpassword" style="font-weight: bold; float: right;">Forgot Password</button>
    </form>
    <p style="text-align: center;">Don't have an account? <a href="p6.php">Sign up</a> to shop online and receive all
        the latest promotions at Green Mart.</p>
    <p style="text-align: center;">
        <button style="background-color: black; "><a href="backstore/index.php"
                                                     style="text-decoration: none; color: white;">Access Backstore</a>
        </button>
    </p>
</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"]."common/footer.php" ?>
</body>

</html>
