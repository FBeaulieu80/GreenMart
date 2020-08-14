<?php
require "common/authenticate.php";
?>
<html lang="en">
<head>

    <link rel="shortcut icon" href="../favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back Store | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../css/backstore.css"/>
    <meta name="author" content="Felix Beaulieu">
</head>
<body>
<?php require "common/header.php"; ?>
<div class="main">
    <h2>Back Store</h2>
    <?php if (isset($_SESSION["username"])) echo "<h3 style='text-align: center'>Welcome {$_SESSION["username"]}.</h3>"; ?>
</div>
<?php require "common/footer.html"; ?>
</body>
</html>
