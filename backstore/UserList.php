<html lang="en">
<head>
    <title>User List | Back Store | Green Mart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/backstore.css"/>
    <link rel="stylesheet" type="text/css" href="../css/p9.css"/>
    <script type="text/javascript" src="../scripts/loadusers.js"></script>
    <!--script type="text/javascript" src="../files/users.json"></script-->
    <script>

    </script>
    <meta name="author" content="Felix Beaulieu">
</head>
<body onload="generateUserList()">
<?php require "common/header.php"; ?>
<div class="main">
    <h2>Green Mart User Accounts</h2>
    <div class="user-sidenav" id="greenmart-user-list">
        <!--a href="EditUserProfile.php">Felix Beaulieu</a>
        <a href="EditUserProfile.php">Michael Rowe</a>
        <a href="EditUserProfile.php">Kyle Taylor-Bracken</a>
        <a href="EditUserProfile.php">Athigan Sinnathurai</a>
        <a href="EditUserProfile.php">Laura Boivin</a-->
        <a href="EditUserProfile.php" id="new-user-link"><b>+</b> New User</a>
    </div>

    <div class="user-info-container">

    </div>
</div>
<?php require "common/footer.html"; ?>
</body>

</html>