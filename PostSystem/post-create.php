<?php
session_name("create");
session_start();
require("post-sql.php");

// TEMP
$_SESSION["USERNAME"] = "test";


//Detta systemet skapar ett inläg.
//Det är väldigt likt regestreringssystemet en skilnad är att här tar du namnet på användaren som är inlogad och läger in det i databasen.

        $query = sql("INSERT INTO posts (name, time, tpost, post, Image) VALUES (:name, current_timestamp(), :tpost, :post, :img);", [
            
            ":user" => $_SESSION["USERNAME"],
            ":post" => $_POST["post"],
            ":tpost" => $_POST["tpost"],
            ":img" => $_POST["image"]
        ]);




define("ALLOWED_SIZE",   2097152);    // CHANGE ALLOWED SIZE AS YOUR NEED
define("SAVED_DIRECTORY", "Images/"); // CHANGE SAVED DIRECTORY AS YOUR NEED

$allowed_extensions = array("jpeg", "jpg", "png"); // CHANGE allowed extension AS YOUR NEED
print_r($_POST);
if(isset($_FILES['image'])){
  $errors = array();

  $uploaded_file_name = $_FILES['image']['name'];
  $uploaded_file_size = $_FILES['image']['size'];
  $uploaded_file_tmp  = $_FILES['image']['tmp_name'];
  $uploaded_file_type = $_FILES['image']['type'];

  $file_compositions = explode('.', $uploaded_file_name);
  $file_ext = strtolower(end($file_compositions));
  
  $saved_file_name = $uploaded_file_name; // CHANGE FILE NAME AS YOUR NEED

  if(in_array($file_ext, $allowed_extensions) === false)
    $errors[] = 'Extension not allowed, please choose a JPEG or PNG file';

  if($uploaded_file_size > ALLOWED_SIZE)
    $errors[] = 'File size is too big';

  if(empty($errors) == true) { // if no error, uploaded image is valid
    move_uploaded_file($uploaded_file_tmp, SAVED_DIRECTORY . $saved_file_name);
    echo "success";
  } else {
    print_r($errors);
  }
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
print_r($_FILES);
//header("Location: post-post.php")
?>

