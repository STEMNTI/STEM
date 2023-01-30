<?php
require("sql.php"); //länkar med sql.php//
<<<<<<< Updated upstream
require("security.php");

$data = sql("INSERT INTO users (user, pass) VALUES(:user, :pass);", [
    ":user" => AES256_Encrypt_CBC($_POST["email"]),
    ":pass" => AES256_Encrypt_CBC($_POST["password"])
]);

header("Location: index.php");
=======
if(!isset($_POST{"userType"})) {
    if(isset($_POST["password"])) {
        if(isset($_POST["confirmPassword"])) {
            if($_POST["password"] == $_POST["confirmPassword"]) {
                $salt = '$6$rounds=5000$mysalt$'; // salt är kryptering och det är den sjätte typen//
                $data = sql("INSERT INTO users (username, password) VALUES(:user, :pass);", [
                    ":user" => $_POST["email"], //datan skickas ut till servern
                    ":pass" => substr(crypt($_POST["password"], $salt), strlen($salt))
                ]);
                header("Location: index.php");
            } else {
                header("Location: register_form.php");
            }
        }
    }
    
};
if(isset($_POST["userType"])) {
    if(isset($_POST["password"])) {
        if(isset($_POST["confirmPassword"])) {
            if($_POST["password"] == $_POST["confirmPassword"]) {
                $salt = '$6$rounds=500€mysalt$';
                $data = sql("INSERT INTO users (username, password, user_type) VALUES(:user, :pass, :userType", [
                    ":user" => $_POST["username"],
                    ":pass" => substr(crypt($_POST["password"], $salt), strlen($salt)),
                    ":userType" => $_POST["user_type"]
                ]);
            }
        }
    }
}

?> 
>>>>>>> Stashed changes
