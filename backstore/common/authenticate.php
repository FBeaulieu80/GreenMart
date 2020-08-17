<?php
include "Errors.php";
session_start();
//$_SESSION["adminauthenticated"] = false;

//$_SESSION["loggedin"] = true;  //TODO REMOVE
//$_SESSION["username"] = "felix.beaulieu@mail.concordia.ca"; // TODO REMOVE
//$_SESSION["isadmin"] = true; // TODO REMOVE

$xml = simplexml_load_file('../../files/users.xml');

foreach ($xml as $user) {
  if($user->email == $_POST['email']) {
    if($user->password == $_POST['password']){
	    $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $_POST['email'];
	    echo "Successful login";
	      if($user->accountType == 'admin'){
		     $_SESSION["adminauthenticated"] = true;
	    }
	    break;			
    } else{
	    echo "Password does not match";
	    break;
      }
  } else{
       echo "User does not exist";
       break;
  }
}

if (isset($_SESSION['loggedin']) && $_SESSION["loggedin"] == true) {
    if (isset($_SESSION["isadmin"]) && $_SESSION["isadmin"] == true) {
        $_SESSION["adminauthenticated"] = true;
    } else {
        header("Location: " . "common/error.php?errorcode=" . Errors::ERROR401);
    }
} else {
    header("Location: " . "/p5.php");
}
