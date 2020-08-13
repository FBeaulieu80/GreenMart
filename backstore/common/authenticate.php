<?php
    include "Errors.php";
    session_start();
    $_SESSION["adminauthenticated"] = false;
    
    $_SESSION["loggedin"] = true; // TODO REMOVE
    $_SESSION["username"] = "felix.beaulieu@mail.concordia.ca"; // TODO REMOVE
    $_SESSION["isadmin"] = true; // TODO REMOVE

    if (isset($_SESSION['loggedin']) && $_SESSION["loggedin"] == true) {
        if (isset($_SESSION["isadmin"]) && $_SESSION["isadmin"] == true) {
            $_SESSION["adminauthenticated"] = true;
        }
        else {
            header("Location: "."common/error.php?errorcode=".Errors::ERROR401);
        }
    } else {
        header("Location: "."/p5.php");
    }    
?>