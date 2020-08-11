<html lang="en">
<head>
    <title>User List | Back Store | Green Mart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/backstore.css"/>
    <link rel="stylesheet" type="text/css" href="../css/p9.css"/>
    <script type="text/javascript" src="scripts/userList.js"></script>
    <meta name="author" content="Felix Beaulieu">
</head>
<body onload="/*generateUserList();*/" onresize="setScreenMode()">
<?php
    include "scripts/User.php";
    require_once "common/header.php";

    $usersFile = simplexml_load_file("../files/users.xml") or die("Error: Cannot create object");
    $numUsers = $usersFile->UserCount;
    $users = new ArrayObject();
    for ($i = 0; $i < $usersFile->user->count(); $i++) {
        $user = new User(intval($usersFile->user[$i]->id),
            $usersFile->user[$i]->firstName,
            $usersFile->user[$i]->middleName,
            $usersFile->user[$i]->lastName,
            $usersFile->user[$i]->email,
            $usersFile->user[$i]->password,
            $usersFile->user[$i]->fullAddress,
            $usersFile->user[$i]->phoneNumber,
            $usersFile->user[$i]->avatarUrl,
            $usersFile->user[$i]->accountType);
        $users->append($user);
    }
?>

<div id="userListMainDiv" class="main">
    <div id="pageHeader">
        <img id="toggleSideNavButton" src="../images/expandBtnImg.svg" alt="|||" onclick="toggleMenu()">
        <h2>Green Mart User Accounts</h2>
    </div>

    <div class="tabContainer" id="userListSideNav">
        <label><input type="search" placeholder="Search..." alt="Search User" oninput="searchUser()" id="searchUserInput"></label>
        <button class="tabLink" id="newUserBtn" onclick="window.open('EditUserProfile.php', '_self');"><b>+</b> New User</button>
        <script src="scripts/userList.js">setScreenMode();</script>
        <?php // Generate User List Links
            for ($i = 0; $i < $users->count(); $i++) {
                echo $users[$i]->generateUserLink();
            }

        ?>
    </div>

    <?php // Generate User Info Cards
        for ($i = 0; $i < $users->count(); $i++) {
            echo $users[$i]->generateUserInfoCard();
        }
    ?>
    <?php require "common/footer.html"; ?>
    </div>
</body>
</html>