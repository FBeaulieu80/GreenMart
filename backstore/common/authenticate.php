<?php
include "Errors.php";
require_once $_SERVER["DOCUMENT_ROOT"]."backstore/scripts/User.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST["username"], $_POST["password"])) {
        $_SESSION["PH_AUTH_USER"] = $_POST["username"];
        $_SESSION["PH_AUTH_PW"] = $_POST["password"];
    }

    User::init();
    foreach (User::getUsers() as $user) {
        if ($_SESSION["PH_AUTH_USER"] == $user->getAttribute("email") && $_SESSION["PH_AUTH_PW"] == $user->getAttribute("password")) {
            $_SESSION["loggedin"] = true;
            if ($user->getAttribute("accountType") == AccountTypes::ADMIN) {
                $_SESSION["isadmin"] = true;
            }
            else {
                $_SESSION["isadmin"] = false;
            }
        }
    }
}

if (isset($_SESSION['loggedin']) && $_SESSION["loggedin"] == true) {
    if (isset($_SESSION["isadmin"]) && $_SESSION["isadmin"] == true) {
        $_SESSION["adminauthenticated"] = true;
    } else {
        $_SESSION["adminauthenticated"] = false;
        header("Location: " . "common/error.php?errorcode=" . Errors::ERROR401);
    }
} else {
    header("Location: " . "/p5.php");
}
