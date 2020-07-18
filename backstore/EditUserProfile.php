<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Profile | Back Store | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../css/backstore.css"/>
    <link rel="stylesheet" type="text/css" href="../css/p10.css"/>
    <meta name="author" content="Felix Beaulieu">
</head>
<body>
<?php require "common/header.php"; ?>
<div class="main">
    <form class="user-profile">
        <div class="container">
            <img src="../images/users/avatar.svg" class="image" alt="Profile Picture">
            <div class="middle">
                <button style="border: none; background-color: seagreen" onclick="" class="text">Change Profile Picture</button>
            </div>
        </div>
        <div class="container" id="info">
            <label>
                <input type="text" name="fname" placeholder="First Name">
            </label><br/>
            <label>
                <input type="text" name="lname" placeholder="Last Name">
            </label><br/>
            <label>
                <input type="email" name="email" placeholder="email">
            </label><br/>
            <label>
                <input type="text" name="fulladdress" placeholder="Full Address">
            </label><br/>
            <label>
                <input type="tel" name="phonenumber" placeholder="Phone Number">
            </label><br/>
            <input type="button" name="confirmbtn" value="Confirm Changes">
            <input type="button" name="cancelbtn" value="Cancel">
            <input type="button" name="deletebtn" value="Delete Account" style="background-color: darkgreen;color: white">
        </div>
    </form>
</div>
<?php require "common/footer.html"; ?>
</body>
</html>