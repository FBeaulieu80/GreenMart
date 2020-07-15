<header><!-- Logo -->
    <?php
        $httpProtocol = !isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ? 'http' : 'https';
        $base = $httpProtocol.'://'.$_SERVER['HTTP_HOST'];
        $base = strpos($base, "localhost")? $base."/soen287_website/": $base."/"; ?>
    <div class="topnav">
        <a href="<?php echo $base; ?>backstore/index.php">
            <img src="<?php echo $base; ?>images/logo_new.png" alt="Green Mart logo">
        </a>
    </div>

    <!-- Main navigation bar with Inventory (P7, P8), Users (P9, P10), Orders (P11, P12) and Login-->
    <div class="mainnav">
        <ul>
            <li><a href="<?php echo $base; ?>index.php" style="border-right: 5px solid darkgreen">Store</a></li>
            <li><a href="<?php echo $base; ?>backstore/common/404.php">Inventory</a></li>
            <li><a href="<?php echo $base; ?>backstore/UserList.php">Users</a></li>
            <li><a href="<?php echo $base; ?>backstore/common/404.php">Orders</a></li>

            <li style="float:right"><a href="<?php echo $base; ?>backstore/common/404.php">Log In</a></li>
        </ul>
    </div>
</header>
