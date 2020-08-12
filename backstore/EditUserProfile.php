<?php
    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
    header("Pragma: no-cache"); // HTTP 1.0.
    header("Expires: 0"); // Proxies.


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["newUser"])) {
            //echo $_GET['newUser']; // TODO REMOVE
            $usersFile = simplexml_load_file("../files/users.xml") or die("Error: Cannot create object");
            //print_r($usersFile); // TODO REMOVE
        }
        if (isset($_POST[""])) {

        }

    }
?>
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
    <form class="userProfileForm" method="post" action="GreenMartUserAccounts.php">
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
                <input type="text" id="firstNameInput" name="firstName" placeholder="First Name*">
            </label>
            <label>
                <input type="text" id="middleNameInput" name="middleName" placeholder="Middle Name">
            </label>
            <label>
                <input type="text" id="lastNameInput" name="lastName" placeholder="Last Name*">
            </label>
            <label>
                <input type="email" id="emailInput" name="email" placeholder="email*">
            </label>
            <label>
                <input class="" type="password" id="passwordInput" name="password" placeholder="Password*">
                <span class="visibility" onclick="togglePasswordVisibility();"></span>
            </label>
            <label>
                <input type="password" id="confirmPasswordInput" name="confirmPassword" placeholder="Confirm Password*">
                <span class="visibility" onclick="togglePasswordVisibility();"></span>
            </label>
            <label>
                <input type="text" id="fullAddressInput" name="fullAddress" placeholder="Full Address*">
            </label>
            <label>
                <input type="tel" id="phoneNumberInput" name="phoneNumber" pattern="([0-9]{10,11})|([0-9]{3}-[0-9]{3}-[0-9]{4})" placeholder="Phone Number*">
            </label>
            <?php
                if (isset($_POST["newUser"])) {
                    echo "<label>
                            <select id='accountType' name='accountType'>
                                  <option value='client'>Client Account</option>
                                  <option value='admin'>Administrator Account</option>
                              </select>
                           </label>";
                    echo "<input type='submit' name='confirmBtn' value='Add new user'> <!--TODO: FIX SUBMIT-->";
                }
                else {
                    echo "<input type='submit' name='confirmBtn' value='Confirm Changes'> <!--TODO: FIX SUBMIT-->";
                }
            ?>
            <input type="button" name="cancelBtn" value="Cancel" onclick="window.open('GreenMartUserAccounts.php', '_self');">
            <input type="button" name="deleteBtn" value="Delete Account" style="background-color: darkgreen;color: white"> <!--TODO: FIX DELETE-->
        </div>
    </form>
</div>
<?php require "common/footer.html"; ?>
</body>
</html>