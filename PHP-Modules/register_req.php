<?php



// url  = /form/register_req.php
$EMAIL = $_POST["email"];
$USERNAME = $_POST["username"];
$PASSWORD = $_POST["password"];


$query = "INSERT INTO `users` (`ID`, `email`, `username`, `password`) VALUES (NULL, '$EMAIL', '$USERNAME', '$PASSWORD');";