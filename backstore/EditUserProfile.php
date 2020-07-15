<html lang="en">
<head>
    <title>Edit User Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/backstore.css"/>
</head>
<body>
<header>
    <!-- Logo -->
    <div class="topnav">
        <a href="index.php"><img src="../images/logo_new.png" alt="Green Mart logo"></a>
    </div>

    <!-- Main navigation bar with Inventory (P7, P8), Users (P9, P10), Orders (P11, P12) and Login-->
    <div class="mainnav">
        <ul>
            <li><a href="404.php">Inventory</a></li>
            <li><a href="UserList.php">Users</a></li>
            <li><a href="404.php">Orders</a></li>

            <li style="float:right"><a href="login/">Log In</a></li>
        </ul>
    </div>
</header>
<div class="main">
    <h1>Edit User Profile</h1>
    <form class="user-profile">
        <div class="img-container">
            <img src="../images/users/avatar.svg" class="image">
            <div class="middle">
                <button style="border: none; background-color: seagreen" onclick="" class="text">Change Profile Picture</button>
            </div>
        </div>
        <input type="text" name="fname" placeholder="First Name"><br/>
        <input type="text" name="lname" placeholder="Last Name"><br/>
        <input type="email" name="email" placeholder="email"><br/>
        <input type="text" name="email" placeholder="email">
    </form>
</div>

<a href="UserList.php">&lt;&lt;Back</a>

<footer>
    <ul>
        <li>Copyright &copy 2020 Green Mart Inc. All Rights Reserved.</li>
        <li>Created my free logo at <a href="https://logomakr.com/">Logomakr.com</a></li>
    </ul>
</footer>
</body>
</html>