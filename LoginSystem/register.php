<?php
require("sql.php"); //länkar med sql.php//
require("security.php");
/* $data = STEMUser("INSERT INTO users (user, pass) VALUES(:user, :pass);", [
    ":user" => AES256_Encrypt_CBC($_POST["email"]),
    ":pass" => AES256_Encrypt_CBC($_POST["password"])
]); */




if(isset($_POST["username"])) {
    $result = STEMUser(
        AES256_Encrypt_CBC($_POST["username"]), 
        AES256_Encrypt_CBC($_POST["password"]),
        isset($_POST["isadmin"]) ? "admin":""
        
    );
    $pdo = new PDO("mysql:host=localhost;dbname=STEM-login;", "root", "");
    $prepared = $pdo->prepare("SELECT username FROM users");
    if(AES256_Decrypt_CBC($result[0]["username"]) == $_POST["username"]) {
        header("Location: register_form.php?=err" . urlencode("This username already exists, try again."));
    } else {
        $prepared->execute();
        header("Location: ../login.php");
    }
}
?>