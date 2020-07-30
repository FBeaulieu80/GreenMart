<header><!-- Logo -->
    <?php
        $httpProtocol = !isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ? 'http' : 'https';
        $base = $httpProtocol.'://'.$_SERVER['HTTP_HOST'];
        $base = strpos($base, "localhost")? $base."/SOEN287/": $base."/"; ?>
    <div class="topnav">
        <a href="<?php echo $base; ?>backstore/index.php">
            <img src="<?php echo $base; ?>images/logo_new.png" alt="Green Mart logo">
        </a>
    </div>

    <!-- Main navigation bar with Inventory (P7, P8), Users (P9, P10), Orders (P11, P12) and Login-->
    <div id="mainNav">
        <a href="<?php echo $base; ?>index.php" id="storeLink">Store</a>
        <a href="<?php echo $base; ?>backstore/ProductList.php">Inventory</a>
        <a href="<?php echo $base; ?>backstore/UserList.php">Users</a>
        <a href="<?php echo $base; ?>backstore/p11.php">Orders</a>
        <a href="<?php echo $base; ?>p5.php"><img id="logInIcon" src="<?php echo $base; ?>images/users/avatar.svg" alt="Avatar"><p id="logInText">Log In</p></a>
    </div>
</header>
<script type="text/javascript">
    window.onscroll = function () { setStickyNav() };

    var mainNav = document.getElementById("mainNav");
    var sticky = mainNav.offsetTop;

    function setStickyNav() {
        if (window.pageYOffset >= sticky) {
            mainNav.classList.add("sticky");
        } else {
            mainNav.classList.remove("sticky");
        }
    }
</script>