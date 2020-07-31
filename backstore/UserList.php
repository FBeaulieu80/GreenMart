<html lang="en">
<head>
    <title>User List | Back Store | Green Mart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/backstore.css"/>
    <link rel="stylesheet" type="text/css" href="../css/p9.css"/>
    <script type="text/javascript" src="../scripts/backstore/userList.js"></script>
    <!--script type="text/javascript" src="../files/users.json"></script-->
    <meta name="author" content="Felix Beaulieu">
</head>
<body onload="generateUserList();" onresize="setScreenMode()">
<?php require "common/header.php"; ?>

<div id="userListMainDiv" class="main">
    <div id="pageHeader">
        <div id="toggleSideNavButton" onclick="toggleMenu()">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <h2>Green Mart User Accounts</h2>
    </div>

    <div class="tabContainer" id="userListSideNav">
        <label><input type="search" placeholder="Search..." alt="Search User" oninput="searchUser()" id="searchUserInput"></label>
        <button class="tabLink" id="newUserBtn" onclick="window.open('EditUserProfile.php', '_self');"><b>+</b> New User</button>
    </div>

    <?php require "common/footer.html"; ?>
</div>


</body>

</html>