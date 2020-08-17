<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Accounts | Back Store | Green Mart</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/backstore.css"/>
    <link rel="stylesheet" type="text/css" href="../css/p9.css"/>
    <script type="text/javascript" src="scripts/userList.js"></script>
    <meta name="author" content="Felix Beaulieu">
</head>
<?php
require "common/authenticate.php";

header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

require_once "scripts/upload.php";
require_once "scripts/User.php";
User::init();
unset($selectedUserId);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["confirmBtn"]) &&
        ($_POST["confirmBtn"] == "Add new user" || $_POST["confirmBtn"] == "Confirm Changes") &&
        isset($_FILES["avatarFile"]) && $_FILES["avatarFile"]["size"] > 0) {
        $avatarFile = receiveFile();
    }

    $user = new User(
        isset($_POST["userId"]) ? $_POST["userId"] : User::getUserCount() + 1,
        isset($_POST["firstName"]) ? $_POST["firstName"] : "",
        isset($_POST["middleName"]) ? $_POST["middleName"] : "",
        isset($_POST["lastName"]) ? $_POST["lastName"] : "",
        isset($_POST["email"]) ? $_POST["email"] : "",
        isset($_POST["password"]) ? $_POST["password"] : "",
        isset($_POST["fullAddress"]) ? $_POST["fullAddress"] : "",
        isset($_POST["phoneNumber"]) ? $_POST["phoneNumber"] : "",
        isset($avatarFile) ? $avatarFile : "../images/users/avatar.svg",
        isset($_POST["accountType"]) ? $_POST["accountType"] : AccountTypes::CLIENT
    );
    $selectedUserId = $user->getId();

    if (isset($_POST["confirmBtn"]) && $_POST["confirmBtn"] == "Add new user") {
        $user->addUser();
    }
    if (isset($_POST["confirmBtn"]) && $_POST["confirmBtn"] == "Confirm Changes") {
        $user->saveUser();
    }
    if (isset($_POST["deleteBtn"]) && isset($_POST["userId"])) {
        $user->deleteUser();
        $selectedUserId = 1;
    }

}
?>


<body onload="/*generateUserList();*/" onresize="setScreenMode()">
<?php include "common/header.php"; ?>

<div id="userListMainDiv" class="main">
    <div id="pageHeader">
        <img id="toggleSideNavButton" src="../images/expandBtnImg.svg" alt="|||" onclick="toggleMenu()">
        <h2>Green Mart User Accounts</h2>
    </div>

    <div class="tabContainer" id="userListSideNav">
        <label><input type="search" placeholder="Search..." alt="Search User" oninput="searchUser()"
                      id="searchUserInput"></label>
        <form id="addUserForm" method="post" action="EditUserProfile.php">
            <input type="submit" value="+ New User" class="tabLink" name="newUser" id="newUserBtn">
        </form>
        <script src="scripts/userList.js">setScreenMode();</script>
        <?php // Generate User List Links
        foreach (User::getUsers() as $xmlUser) {
            $user = User::fromDOMElement($xmlUser);
            echo $user->generateUserLink($user->getId() == (isset($selectedUserId) ? $selectedUserId : 1));
        }
        ?>
    </div>

    <?php // Generate User Info Cards
    foreach (User::getUsers() as $xmlUser) {
        $user = User::fromDOMElement($xmlUser);
        echo $user->generateUserInfoCard($user->getId() == (isset($selectedUserId) ? $selectedUserId : 1));
    }
    /*for ($i = 0; $i < $users->count(); $i++) {
        echo $users[$i]->generateUserInfoCard($i == 0);
    }*/
    ?>
    <?php include "common/footer.html"; ?>
</div>
</body>
</html>