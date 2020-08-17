<?php
include "Errors.php";
session_start();

// If page is accessed from a form (ie P5), authenticate user for the current session.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username'], $_POST['password'])) {
        $xml = simplexml_load_file('../../files/users.xml');
        $status = -1;
        foreach ($xml as $user) {
            if (strtolower($user['email']) == strtolower($_POST['username'])) {
                if ($user['password'] == $_POST['password']) {
                    $_SESSION["loggedin"] = true;
                    $_SESSION["username"] = $_POST['username'];
                    $_SESSION["password"] = $_POST['password'];
                    $_SESSION["adminauthenticated"] = ($user['accountType'] == 'admin');
                    $status = 0;
                    break;
                } else {
                    $status = 1;
                    break;
                }
            } else {
                $status = 2;
                break;
            }
        }
        switch ($status) {
            case 0:
                header("Location: " . "/p5.php?login=Successful");
                break;
            case 1:
                header("Location: " . "/p5.php?login=Wrong+Password");
                break;
            case 2:
                header("Location: " . "/p6.php?login=Unknown+User");
                break;
            default:
                header("Location: " . "/p5.php?login=Unknown+Error");
        }
    }
}
// If the page is included in another page
else {
    if (isset($_SESSION['loggedin']) && $_SESSION["loggedin"] == true) {
        if (isset($_SESSION["adminauthenticated"]) && $_SESSION["adminauthenticated"] == false) {
            header("Location: " . "common/error.php?errorcode=" . Errors::ERROR401);
        }
    } else {
        header("Location: " . "/p5.php");
    }
}
