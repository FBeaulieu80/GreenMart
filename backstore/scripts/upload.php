<?php
define('KB', 1024);
define('MB', 1048576);
define('GB', 1073741824);
define('TB', 1099511627776);

function receiveFile()
{
    $target_dir = "../images/users/";
    $target_file = $target_dir . basename($_FILES["avatarFile"]["name"]);
    $uploadOk = 1;
    $fileExists = 0;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["avatarFile"]["tmp_name"]);
    if ($check !== false) {
        if (isset($DEBUG) && $DEBUG == true) echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        if (isset($DEBUG) && $DEBUG == true) echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
    if (file_exists($target_file)) {
        if (isset($DEBUG) && $DEBUG == true) echo "Sorry, file already exists.";
        $uploadOk = 0;
        $fileExists = 1;
    }

// Check file size
    if ($_FILES["avatarFile"]["size"] > (2 * MB)) {
        if (isset($DEBUG) && $DEBUG == true) echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        if (isset($DEBUG) && $DEBUG == true) echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        if (isset($DEBUG) && $DEBUG == true) echo "Sorry, your file was not uploaded.";
        if ($fileExists == 1) {
            return $target_file;
        }
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["avatarFile"]["tmp_name"], $target_file)) {
            if (isset($DEBUG) && $DEBUG == true) echo "The file " . basename($_FILES["avatarFile"]["name"]) . " has been uploaded.";
            return $target_file;
        } else {
            if (isset($DEBUG) && $DEBUG == true) echo "Sorry, there was an error uploading your file.";

        }
    }
    return null;
}

