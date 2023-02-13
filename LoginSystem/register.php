<?php
require("sql.php"); //länkar med sql.php//
require("security.php");
/* $data = CreateUser("INSERT INTO users (user, pass) VALUES(:user, :pass);", [
    ":user" => AES256_Encrypt_CBC($_POST["email"]),
    ":pass" => AES256_Encrypt_CBC($_POST["password"])
]); */

$data = CreateUser(
    AES256_Encrypt_CBC($_POST["username"]), 
    AES256_Encrypt_CBC($_POST["password"]),
    isset($_POST["isadmin"]) ? "admin":""
);

header("Location: index.php");
?> 