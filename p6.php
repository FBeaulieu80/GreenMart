<!DOCTYPE html>
<html lang="en" xmlns:style="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Green Mart!</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/p6.css" />
    <style>
        #box{
            border: 1px solid black;
            padding: 5px 10px 5px 10px;
            width: 45%;
            margin: 150px 150px 0;
            background: lightgreen;
        }
    </style>
</head>

<body>
    <?php require_once "common/header.php"?>
    <div class="main">
        <form id="box">
            <h4 style="font-weight: bold; color: darkblue; text-align: center;">SIGNUP TO CREATE A GREENMART ACCOUNT</h4>
            <h3 style="font-weight: bold; text-decoration: underline;">PROFILE</h3>
        
            <label for="firstname">*FIRST NAME</label>
            <input type="text" name="firstname" required>	&nbsp;	&nbsp;
            <label for="lastname">*LAST NAME</label>
            <input type="text" name="lastname" required><br><br>
            <label for="email">*EMAIL</label>
            <input type="text" name="email" required> &nbsp;	&nbsp;
            <label for="confemail">*CONFIRM EMAIL</label>
            <input type="text" name="confemail" required><br><br>
            <label for="postalcode">*POSTAL CODE</label>
            <input type="text" name="postalcode" required><br><br>
            <label for="phone">PHONE NUMBER</label>
            <input type="text" name=phone><br><br>
            <label for="password">PASSWORD (minimum 6 characters, including numbers and letters)</label>
                <input type="password" value="" id="myInput">
                <input type="checkbox" onclick="myFunction()" required>Show Password
            
            <script>
                function myFunction() {
                  var x = document.getElementById("myInput");
                  if (x.type === "password") {
                    x.type = "text";
                  } else {
                    x.type = "password";
                  }
                }
            </script><br><br>
            <label for="password">CONFIRM PASSWORD</label><br>
                <input type="password" value="" id="myInput"><br><br>
            
                
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
          <label for="vehicle1"> Subscribe to receive email notifications on Green Mart promotions. Unsubscribe at any time.</label><br><br>
          <button type="button" class="submit" style="font-weight: bold;">FINISH PROFILE</button>
        </form>

        <p>Already have a Green Mart account? <a href="p5.php">Login</a> to shop online.</p>
    </div>
</body>
<?php require_once "common/footer.html"?>
</html>