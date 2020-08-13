<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Profile | Back Store | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../css/backstore.css"/>
    <link rel="stylesheet" type="text/css" href="../css/p10.css"/>
    <script type="text/javascript" src="scripts/userList.js"></script>
    <meta name="author" content="Felix Beaulieu">
</head>
<?php
    include "common/authenticate.php";

    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
    header("Pragma: no-cache"); // HTTP 1.0.
    header("Expires: 0"); // Proxies.

    include "scripts/User.php";
    User::init();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["editBtn"], $_POST["userId"])) {
            $populateForm = true;
            $selectedUser = null;
            foreach (User::getUsers() as $user) {
                if ($user['id'] == $_POST["userId"]) {
                    $selectedUser = User::fromSimpleXMLElement($user);
                }
            }
        }
        else {
            $populateForm = false;
            //header("Location: "."common/error.php?errorcode=".Errors::ERROR404);
        }

    }
?>
<body>
<?php require "common/header.php"; ?>
<div class='main'>
    <form class="userProfileForm" method="post" action="GreenMartUserAccounts.php" id="newUserForm">
        <div class="container">
            <img id="userAvatarImg" src="<?php  echo isset($selectedUser) ? $selectedUser->getAvatarUrl() : '../images/users/avatar.svg'; ?>" class="avatarImg" alt="Profile Picture">
            <div class="middle">
                <label for="avatarFile">Change Profile Picture</label>
                <input type="file" name="avatarFile" id="avatarFile">
            </div>
        </div>
        <div class="container" id="info">
            <label>
                <input type="text" id="firstNameInput" name="firstName" placeholder="First Name*" <?php if (isset($selectedUser)) echo "value='{$selectedUser->getFirstName()}'"; ?>>
            </label>
            <label>
                <input type="text" id="middleNameInput" name="middleName" placeholder="Middle Name" <?php if (isset($selectedUser)) echo "value='{$selectedUser->getMiddleName()}'"; ?>>
            </label>
            <label>
                <input type="text" id="lastNameInput" name="lastName" placeholder="Last Name*"  <?php if (isset($selectedUser)) echo "value='{$selectedUser->getLastName()}'"; ?>>
            </label>
            <label>
                <input type="email" id="emailInput" name="email" placeholder="email*" <?php if (isset($selectedUser)) echo "value='{$selectedUser->getEmail()}'"; ?>>
            </label>
            <label>
                <input class="" type="password" id="passwordInput" name="password" placeholder="Password*" <?php if (isset($selectedUser)) echo "value='{$selectedUser->getPassword()}'"; ?>>
                <span class="visibility" onclick="togglePasswordVisibility();"></span>
            </label>
            <label>
                <input type="password" id="confirmPasswordInput" name="confirmPassword" placeholder="Confirm Password*" <?php if (isset($selectedUser)) echo "value='{$selectedUser->getPassword()}'"; ?>>
                <span class="visibility" onclick="togglePasswordVisibility();"></span>
            </label>
            <label>
                <input type="text" id="fullAddressInput" name="fullAddress" placeholder="Full Address*" <?php if (isset($selectedUser)) echo "value='{$selectedUser->getFullAddress()}'"; ?>>
            </label>
            <label>
                <input type="tel" id="phoneNumberInput" name="phoneNumber" pattern="([0-9]{10,11})|([0-9]{3}-[0-9]{3}-[0-9]{4})" placeholder="Phone Number*" <?php if (isset($selectedUser)) echo "value='{$selectedUser->getPhone()}'"; ?>>
            </label>
            <label>
                <select id='accountType' name='accountType'>
                    <option value='client' <?php if (isset($selectedUser) && $selectedUser->getAccountType() == AccountTypes::CLIENT) echo "selected"; ?>>Client Account</option>
                    <option value='admin' <?php if (isset($selectedUser) && $selectedUser->getAccountType() == AccountTypes::ADMIN) echo "selected"; ?>>Administrator Account</option>
                </select>
            </label>
            <input type='submit' name='confirmBtn' value='<?php if (isset($_POST["newUser"])) echo "Add new user"; else echo "Confirm Changes"; ?>'>
            <input type="button" name="cancelBtn" value="Cancel" onclick="window.open('GreenMartUserAccounts.php', '_self');">
            <input type="submit" name="deleteBtn" value="Delete Account" style="background-color: darkgreen;color: white">
            <?php if (isset($selectedUser)) { echo "<input type='hidden' value='{$selectedUser->getId()}' name='userId'>"; } ?>
        </div>
    </form>
    </div>

    <?php require "common/footer.html"; ?>
</body>
</html>