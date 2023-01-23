<?php
require("sql.php"); //länkar med sql.php//
$salt = '$6$rounds=5000$mysalt$'; // salt är kryptering och det är den sjätte typen//

$data = sql("INSERT INTO users (user, pass) VALUES(:user, :pass);", [
    ":user" => $_POST["email"], //datan skickas ut till servern
    ":pass" => substr(crypt($_POST["password"], $salt), strlen($salt))
]);

header("Location: index.php");
?> 