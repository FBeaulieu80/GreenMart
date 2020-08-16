<header><!-- Logo -->
    <?php
    $httpProtocol = !isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ? 'http' : 'https';
    $base = $httpProtocol . '://' . $_SERVER['HTTP_HOST'];
    $base = strpos($base, "localhost") ? $base . "/Soen287_team/" : $base . "/"; ?>
    <div class="topnav">
        <a href="<?php echo $base; ?>backstore/index.php">
            <img src="<?php echo $base; ?>images/logo_new.png" alt="Green Mart logo">
        </a>
    </div>

    <!-- Main navigation bar with Inventory (P7, P8), Users (P9, P10), Orders (P11, P12) and Login-->
    <?php
    if (isset($_SESSION["adminauthenticated"]) && $_SESSION["adminauthenticated"] == true) {
        echo <<<MAINNAV
            <div id='mainNav'>
                <a href='{$base}index.php' id='storeLink'>Store</a>
                <a href='{$base}backstore/ProductList.php'>Inventory</a>
                <a href='{$base}backstore/GreenMartUserAccounts.php'>Users</a>
                <a href='{$base}backstore/p11.php'>Orders</a>
                <a href='{$base}p5.php'><img style="display: inline-block" id='logInIcon' src='{$base}images/users/avatar.svg' alt='Avatar'><p id='logInText'>Log Out</p></a>
            </div>
            MAINNAV;
    } else {
        echo <<<MAINNAV
            <div id='mainNav' style='grid-template-columns: repeat(2, auto)'>
                <a href='{$base}index.php' id='storeLink'>Store</a>
                <a href='{$base}p5.php'><img id='logInIcon' src='{$base}images/users/avatar.svg' alt='Avatar'><p id='logInText'>Log In</p></a>
            </div>
            MAINNAV;
    }

    ?>

</header>
<script type="text/javascript">
    window.onscroll = function () {
        setStickyNav()
    };

    const mainNav = document.getElementById("mainNav");
    const sticky = mainNav.offsetTop;

    function setStickyNav() {
        if (window.pageYOffset >= sticky) {
            mainNav.classList.add("sticky");
        } else {
            mainNav.classList.remove("sticky");
        }
    }
</script>