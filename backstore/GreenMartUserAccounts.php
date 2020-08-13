<html lang="en">
<head>
    <title>User Accounts | Back Store | Green Mart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    include "scripts/User.php";
    User::init();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //echo "POST: <pre>"; print_r($_POST); echo "</pre><br/>"; // TODO REMOVE

        $user = new User(
            isset($_POST["userId"])? $_POST["userId"] : User::getUserCount()+1,
            isset($_POST["firstName"]) ? $_POST["firstName"] : "",
            isset($_POST["middleName"]) ? $_POST["middleName"] : "",
            isset($_POST["lastName"]) ? $_POST["lastName"] : "",
            isset($_POST["email"]) ? $_POST["email"] : "",
            isset($_POST["password"]) ? $_POST["password"] : "",
            isset($_POST["fullAddress"]) ? $_POST["fullAddress"] : "",
            isset($_POST["phoneNumber"]) ? $_POST["phoneNumber"] : "",
            isset($_POST["avatarUrl"]) ? $_POST["avatarUrl"] : "",
            isset($_POST["accountType"]) ? $_POST["accountType"] : AccountTypes::CLIENT
        );

        if (isset($_POST["confirmBtn"]) && $_POST["confirmBtn"] == "Add new user") {
            $user->addUser();
        }
        if (isset($_POST["confirmBtn"]) && $_POST["confirmBtn"] == "Confirm Changes") {
            echo "Save changes...";
            $user->saveUser();
            //User::saveUser();
        }
        if (isset($_POST["cancelBtn"])) {
            echo "Cancelled";
        }
        if (isset($_POST["deleteBtn"]) && isset($_POST["userId"])) {
            echo "Delete";
            $user->deleteUser();
            //User::removeUser($_POST["userId"]);
        }

    }
?>


<body onload="/*generateUserList();*/" onresize="setScreenMode()">
<?php
require_once "common/header.php";
/*
$usersFile = simplexml_load_file("../files/users.xml") or die("Error: Cannot create object");


$numUsers = $usersFile->UserCount;
$users = new ArrayObject();
for ($i = 0; $i < $usersFile->user->count(); $i++) {
    $user = new User(
        intval($usersFile->user[$i]->id),
        $usersFile->user[$i]->firstName,
        $usersFile->user[$i]->middleName,
        $usersFile->user[$i]->lastName,
        $usersFile->user[$i]->email,
        $usersFile->user[$i]->password,
        $usersFile->user[$i]->fullAddress,
        $usersFile->user[$i]->phone,
        $usersFile->user[$i]->avatarUrl,
        $usersFile->user[$i]->accountType);
    $users->append($user);
}*/
?>

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
                //print_r($xmlUser);
                $user = User::fromSimpleXMLElement($xmlUser);
                //print_r($user);
                echo $user->generateUserLink($user->getId() == 1);
            }
            /*for ($i = 0; $i < $users->count(); $i++) {
                echo $users[$i]->generateUserLink($i == 0);
            }*/
        ?>
    </div>

    <?php // Generate User Info Cards
        foreach (User::getUsers() as $xmlUser) {
            $user = User::fromSimpleXMLElement($xmlUser);
            echo $user->generateUserInfoCard($user->getId() == 1);
        }
        /*for ($i = 0; $i < $users->count(); $i++) {
            echo $users[$i]->generateUserInfoCard($i == 0);
        }*/
    ?>
    <?php require "common/footer.html"; ?>
</div>
</body>
</html>