<?php 
session_name("STEM"); 
session_start();
// prevent non admin users from visiting this page
if(!isset($_SESSION["usertype"]) || $_SESSION["usertype"] !== "admin"){ // checks if "usertype" isnt set or is set to admin
  header("Location: ../../ooopspage.html"); // forwards user to ooopspage.html
  exit();
}
?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Admin</title>
</head>
<body>
    <a href="STEM_user.php">To STEM new user.</a>
    <br><br>
    <a href="../logout.php">Logout here!</a>
    <br><br>
    <a href="../../index.php">index page</a>
</body>
</html>