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
<?php
    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
    header("Pragma: no-cache"); // HTTP 1.0.
    header("Expires: 0"); // Proxies.
    require_once $_SERVER["DOCUMENT_ROOT"]."common/header.php" ?>
<ul class="breadcrumb">
    <li><a href="index.php">Store</a></li>
    <li>Log In</li>
</ul>
<div class="main">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["login"])) {
            switch ($_GET["login"]) {
                case "Successful":
                    echo "<h3>You are now logged in.</h3>";
                    break;
                case "Wrong Password":
                    echo "<h3>Wrong password.</h3>";
                    break;
                case "Unknown Error":
                    echo "<h3>Oops! Something went wrong...</h3>";
                    break;
            }
        }
    }
    ?>
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
