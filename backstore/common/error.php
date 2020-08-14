<html lang="en">
<head>

    <link rel="shortcut icon" href="../../favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oops! | Green Mart</title>
    <link rel="stylesheet" type="text/css" href="../../css/backstore.css"/>
    <meta name="author" content="Felix Beaulieu">
</head>
<body>
<?php require "header.php"; ?>
<div class="main">
    <?php
    include "Errors.php";
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["errorcode"])) {
            echo "<h2>{$_GET["errorcode"]}</h2>";
        } else {
            echo <<<OOPS
                <h2>Oops! Something went wrong!<br/>
                <a href="../../index.php">Go to the <u>Store Page</u></a>
                </h2>
                OOPS;
        }
    }
    ?>
</div>
<?php require "footer.html"; ?>
</body>
</html>
