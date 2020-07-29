<html lang="en">
<head>
    <title>User List | Back Store | Green Mart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/backstore.css"/>
    <link rel="stylesheet" type="text/css" href="../css/p9.css"/>
    <script type="text/javascript" src="../scripts/loadusers.js"></script>
    <!--script type="text/javascript" src="../files/users.json"></script-->
    <meta name="author" content="Felix Beaulieu">
</head>
<body onload="generateUserList()" on>
<?php require "common/header.php"; ?>

<div id="userListMain" class="main">
    <h2 id="userListPageHeader">Green Mart User Accounts</h2>
    <div class="tabContainer" id="userListDiv">
        <button class="tabLink" id="newUserBtn" onclick="window.open('EditUserProfile.php', '_self');"><b>+</b> New User</button>
    </div>


</div>

<script>
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

<?php require "common/footer.html"; ?>
</body>

</html>