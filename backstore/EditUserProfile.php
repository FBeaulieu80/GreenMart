<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Profile | Back Store | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../css/backstore.css"/>
    <link rel="stylesheet" type="text/css" href="../css/p10.css"/>
    <script type="text/javascript" src="scripts/userList.js"></script>
    <meta name="author" content="Felix Beaulieu">
</head>
<body>
<?php require "common/header.php"; ?>
<div class="main">
    <form class="userProfileForm">
        <div class="container">
            <img id="userAvatarImg" src="../images/users/avatar.svg" class="avatarImg" alt="Profile Picture">
            <div class="middle">
                <label for="avatarFile">Change Profile Picture</label>
                <input type="file" name="avatarFile" id="avatarFile">
                <!--button onclick="changeAvatar()">Change Profile Picture</button-->
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
                <input type="tel" id="phoneNumberInput" name="phonenumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone Number">
            </label><br/>
            <input type="submit" name="confirmbtn" value="Confirm Changes" formmethod="post"> <!--TODO: FIX SUBMIT-->
            <input type="button" name="cancelbtn" value="Cancel" onclick="window.open('GreenMartUserAccounts.php');">
            <input type="button" name="deletebtn" value="Delete Account" formmethod="post" style="background-color: darkgreen;color: white"> <!--TODO: FIX DELETE-->
        </div>
    </form>
</div>
<?php require "common/footer.html"; ?>
</body>
</html>