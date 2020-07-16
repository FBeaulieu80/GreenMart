<header>
    <?php
    $httpProtocol = !isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ? 'http' : 'https';
    $base = $httpProtocol.'://'.$_SERVER['HTTP_HOST'];
    $base = strpos($base, "localhost")? $base."/soen287_website/": $base."/"; ?>
    <!-- Logo and Search bar-->
    <div class="topnav">
        <ul>
            <li><img src="<?php echo $base ?>images/logo_new.png" alt="Green Mart logo" id="logo"></li>
            <li style="float:right">
                <div class="search-bar">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search for a product" name="search">
                        <button type="submit" style="float:right">Submit</button>
                    </form>
                </div>
            </li>
        </ul>
    </div>

    <!-- Main navigation bar with Aisles, random buttons, login, sign up, checkout-->
    <div class="mainnav">
        <ul>
            <li><a href="<?php echo $base ?>index.php">Home</a></li>
            <li><a href="<?php echo $base ?>aisles/index.php">Aisles</a></li> <!-- TODO: Implement dropdown menu -->
            <li><a href="<?php echo $base ?>common/404.php">Deals</a></li>
            <li><a href="<?php echo $base ?>common/404.php">Recipes</a></li>
            <li><a href="<?php echo $base ?>common/404.php">Blog</a></li>

            <li style="float:right"><a href="<?php echo $base ?>p4.php">Shopping Cart (4)</a></li>
            <li style="float:right"><a href="<?php echo $base ?>p6.php">Sign Up</a></li>
            <li style="float:right"><a href="<?php echo $base ?>p5.php">Log In</a></li>
        </ul>
    </div>
</header>