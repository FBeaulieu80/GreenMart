<?php
include "Errors.php";
session_start();

// If page is accessed from a form (ie P5), authenticate user for the current session.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $xml = simplexml_load_file('../../files/users.xml');

    foreach ($xml as $user) {
        if ($user->email == $_POST['email']) {
            if ($user->password == $_POST['password']) {
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $_POST['email'];
                //echo "Successful login";
                if ($user->accountType == 'admin') {
                    $_SESSION["adminauthenticated"] = true;
                }
                header("Location: ". "p5.php?login=Successful");
                break;
            } else {
                //echo "Password does not match";
                header("Location: ". "p5.php?login=Wrong+Password");
                break;
            }
        } else {
            //echo "User does not exist";
            header("Location: ". "p6.php");
            break;
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
