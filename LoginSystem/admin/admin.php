<?php 
session_start();
// prevent non admin users from visiting this page
if(!isset($_SESSION["usertype"]) || $_SESSION["usertype"] !== "admin"){
  header("Location: ooopspage.html");
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
    <a href="create_user.php">To create new user.</a>
</body>
</html>