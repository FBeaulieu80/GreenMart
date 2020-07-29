<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Profile | Back Store | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../css/backstore.css"/>
    <link rel="stylesheet" type="text/css" href="../css/p10.css"/>
    <script type="text/javascript" src="../scripts/loadusers.js"></script>
    <meta name="author" content="Felix Beaulieu">
</head>
<body>
<?php require "common/header.php"; ?>
<div class="main">
    <form class="userProfileForm">
        <div class="container">
            <img id="userAvatarImg" src="../images/users/avatar.svg" class="image" alt="Profile Picture">
            <div class="middle">
                <button style="border: none; background-color: seagreen; color: white;" onclick="changeAvatar()" class="text">Change Profile Picture</button>
            </div>
        </div>
        <div class="container" id="info">
            <label>
                <input type="text" id="firstNameInput" name="fname" placeholder="First Name">
            </label><br/>
            <label>
                <input type="text" id="lastNameInput" name="lname" placeholder="Last Name">
            </label><br/>
            <label>
                <input type="email" id="emailInput" name="email" placeholder="email">
            </label><br/>
            <label>
                <input type="text" id="fullAddressInput" name="fulladdress" placeholder="Full Address">
            </label><br/>
            <label>
                <input type="tel" id="phoneNumberInput" name="phonenumber" placeholder="Phone Number">
            </label><br/>
            <input type="button" name="confirmbtn" value="Confirm Changes" onclick="createNewUser()">
            <input type="button" name="cancelbtn" value="Cancel" onclick="window.history.back();">
            <input type="button" name="deletebtn" value="Delete Account" onclick="deleteUser()" style="background-color: darkgreen;color: white">
        </div>
    </form>
</div>
<?php require "common/footer.html"; ?>
</body>
</html>