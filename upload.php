<?php
//var_dump($_FILES);
header('Content-Type: text/html; charset=UTF-8');
putenv('LANG=en_US.UTF-8');
function uploadImage(){
    if(!isset($_FILES["fileToUpload"]["name"]) || $_FILES["fileToUpload"]["name"] == ""){
        return;
    }   
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
    $uploadOk = 0;
    $_POST["image"] = basename($_FILES["fileToUpload"]["name"]);
    }


    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        $_POST["image"] = basename($_FILES["fileToUpload"]["name"]);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    }
}

function translate(){
    if(isset($_POST["toLanguage"]) && isset($_POST["image"]) && $_POST["image"]!=""){
        $command = escapeshellcmd('C:\Users\MLADEN\AppData\Local\Programs\Python\Python37\python C:\wamp\www\TranslateFromImage\projekat.py -i '
     . $_POST["image"] . ' -f ' . $_POST["fromLanguage"] . ' -t ' . $_POST["toLanguage"]);
        $output = shell_exec($command);
        echo("<h3>Translated Text</h3><hr>");
        echo($output);
    }
}

if(!isset($_POST["fromLanguage"])) $_POST["fromLanguage"] = 'en';
if(!isset($_POST["toLanguage"])) $_POST["toLanguage"] = 'en';
uploadImage();
?>