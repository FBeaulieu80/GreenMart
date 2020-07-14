<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/backstore.css"/>
    <link rel="stylesheet" type="text/css" href="../css/p1.css"/>
</head>
<header>
    <!-- Logo and Search bar-->
    <div class="topnav">
        <ul>
            <li><img src="../images/logo_new.png" alt="Green Mart logo" id="logo"></li>
            <li style="float:right">
                <div class="search-bar">
                    <form actio="/action_page.php">
                        <input type="text" placeholder="Search for a product" name="search">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </li>
        </ul>
    </div>

    <!-- Main navigation bar with Aisles, random buttons, login, sign up, checkout-->
    <div class="mainnav">
        <ul>
            <li><a href="aisles/p2.html">Aisles</a></li> <!-- TODO: Implement dropdown menu -->
            <li><a href="deals/">Deals</a></li>
            <li><a href="recipes/">Recipes</a></li>
            <li><a href="blog/">Blog</a></li>

            <li style="float:right"><a href="cart/">Shopping Cart (0)</a></li>
            <li style="float:right"><a href="signup/">Sign Up</a></li>
            <li style="float:right"><a href="login/">Log In</a></li>


        </ul>
    </div>
</header>
<body class="main">
<h1>Edit User Profile</h1>
<form>
    <th></th>
    <tr></tr>
    <label>Username:</label>
    <label>Password:</label>
    <hline/>
    <label>Address:</label>
</form>
</body>
<footer><a href="UserList.php">&lt;&lt;Back</a> </footer>
</html>