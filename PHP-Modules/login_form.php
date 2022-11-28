<?php
session_start();
require "./Database.php";

if(!isset($_SESSION["valid"])) {
    $_SESSION["valid"] = false;
}

// url = /form/login_req.php

$_POST["username"] = "username2";
$_POST["password"] = "12345";

$query = "SELECT * FROM `users`";



if (isset($conn)) {
    $result = $conn->query($query);
}
$response = $result->fetchAll(PDO::FETCH_ASSOC);



foreach($response as $value) {
    if($value["username"] == $_POST["username"]) {
        if ($value["password"] == $_POST["password"]) {
            $_SESSION["valid"] = true;
            echo "Login Successful";
        }
    }
}