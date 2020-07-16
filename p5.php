<!DOCTYPE html>
<html lang="en" xmlns:style="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Green Mart!</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/p5.css" />
    <style>
        
    #box{
       border: 1px solid black;
       padding: 5px 5px 5px 15px;
       margin-left: auto;
       margin-right: auto;
       margin: 150px;
       width: 30%;
       margin-bottom: 0px;
       background: lightgreen;
     }
   </style>
</head>

<body>
    <?php require_once "common/header.php"?>
    <div class="main">
        
        <form id="box">
            <h4 style="font-weight: bold; color: darkblue;text-align: center;">LOG IN TO YOUR GREEN MART ACCOUNT</h4>
            <label for="name">Email:</label>
            <input type="text" name="email" required><br><br>
            Password: <input type="password" value="" id="myInput"><br><br>
            <input type="checkbox" onclick="myFunction()" required>Show Password<br><br>
            
            <script>
                function myFunction() {
                  var x = document.getElementById("myInput");
                  if (x.type === "password") {
                    x.type = "text";
                  } else {
                    x.type = "password";
                  }
                }
            </script>
        
        <button type="button" class="submit" style="font-weight: bold;">Submit</button>
        <button type="button" class="forgetpassword" style="font-weight: bold; float: right;">Forget Password</button>
        </form>

        <p>Don't have an account? <a href="p6.php">Sign up</a> to shop online and receive all the latest promotions at Green Mart.</p>
        
        <p><button style="background-color: black;"><a href="backstore/index.php" style="text-decoration: none; color: white;">Access Backstore</a></button></p>
    </div>
</body>
<footer>
    <ul>
        <li>Copyright &copy 2020 Green Mart Inc. All Rights Reserved.</li>
        <li>Created my free logo at <a href="https://logomakr.com/">Logomakr.com</a></li>
    </ul>
</footer>
</html>
