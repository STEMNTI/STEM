<?php
require("sql.php"); //länkar med sql.php//
require("security.php");

$data = sql("INSERT INTO users (user, pass) VALUES(:user, :pass);", [
    ":user" => AES256_Encrypt_CBC($_POST["email"]),
    ":pass" => AES256_Encrypt_CBC($_POST["password"])
]);

header("Location: index.php");