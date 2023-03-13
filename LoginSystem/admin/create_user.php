<?php 
session_name("STEM");
session_start();
// prevent non admin users from visiting this page
if(!isset($_SESSION["usertype"]) || $_SESSION["usertype"] !== "admin"){
  header("Location: ../../ooopspage.html");
  exit();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEM user - Admin</title>
</head>
<body>
    <form action="../register.php" method="post">
        <input type="text" name="username" placeholder="username"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <label for="isadmin">Set To Admin</label>
        <input type="checkbox" name="isadmin" placeholder="admin"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>