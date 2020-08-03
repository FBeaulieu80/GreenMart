<!DOCTYPE html>
<html lang="en" xmlns:style="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Log In | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/p5.css" />
    <meta name="author" content="Athigan Sinnathurai"/>
</head>

<body>
    <?php require_once "common/header.php"?>
    <div class="main">
        <!-- TODO: All inputs should have labels.-->
        <form id="box">
            <h4 style="font-weight: bold; color: darkblue;text-align: center;">LOG IN TO YOUR GREEN MART ACCOUNT</h4>
            <label>
                Email:
                <input type="text" name="email" id="email" required>
            </label><br><br>
            <label>
                Password:
                <input type="password" value="" id="login_password">
            </label><br><br>
            <label>
                <input type="checkbox" id="showpasscb" onclick="myFunction()" required>
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
        
        <button type="button" class="submit" style="font-weight: bold;">Submit</button>
        <button type="button" class="forgotpassword" style="font-weight: bold; float: right;">Forgot Password</button>
        </form>

        <p style="text-align: center;">Don't have an account? <a href="p6.php">Sign up</a> to shop online and receive all the latest promotions at Green Mart.</p>
        <p style="text-align: center;"><button style="background-color: black; "><a href="backstore/index.php" style="text-decoration: none; color: white;">Access Backstore</a></button></p>
    </div>
    <?php require_once "common/footer.php" ?>
</body>

</html>
