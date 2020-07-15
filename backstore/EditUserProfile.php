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

            <li style="float:right"><a href="404.php">Log In</a></li>
        </ul>
    </div>
</header>
<div class="main">
    <form class="user-profile">
        <div class="container">
            <img src="../images/users/avatar.svg" class="image" alt="Profile Picture">
            <div class="middle">
                <button style="border: none; background-color: seagreen" onclick="" class="text">Change Profile Picture</button>
            </div>
        </div>
        <div class="container" id="info">
            <label>
                <input type="text" name="fname" placeholder="First Name">
            </label><br/>
            <label>
                <input type="text" name="lname" placeholder="Last Name">
            </label><br/>
            <label>
                <input type="email" name="email" placeholder="email">
            </label><br/>
            <label>
                <input type="text" name="fulladdress" placeholder="Full Address">
            </label><br/>
            <label>
                <input type="tel" name="phonenumber" placeholder="Phone Number">
            </label><br/>
            <input type="button" name="confirmbtn" value="Confirm Changes">
            <input type="button" name="cancelbtn" value="Cancel">
            <input type="button" name="deletebtn" value="Delete Account" style="background-color: darkgreen;color: white">
        </div>
    </form>
</div>

<footer>
    <ul>
        <li>Copyright &copy 2020 Green Mart Inc. All Rights Reserved.</li>
        <li>Created my free logo at <a href="https://logomakr.com/">Logomakr.com</a></li>
    </ul>
</footer>
</body>
</html>