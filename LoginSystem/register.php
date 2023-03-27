<?php
require("sql.php"); //länkar med sql.php//
require("security.php");
require("../config.php");

if(isset($_POST["username"])) {
   
    $pdo = new PDO("mysql:host=" . host . ";dbname=" . dbname . ";", username, password); /* en ny koppling till databasen */
    
    $prepared = $pdo->prepare("SELECT username FROM users WHERE username = :user"); /* förbereder pdo med prepare for att hämta information så att en koll på om ett användarnamn redan finns eller inte kan köras. */
    $username = $_POST["username"]; 
    $prepared->bindParam(":user", $username);/* binder användarnamnet som kommit från registrerings formen till :user som sedan används för att kolla om det inskickade användarnamnet redan finns i databasen eller inte. */

    $prepared->execute();

    if($prepared->rowCount() > 0) { /* den kollar vilken rad som användarnamnet befinner sig på, om rad numret är högra än 0 så betyder det att användarnamnet redan finns men om rad numret är 0 så finns inte användarnamnet och kommer vidarebefodra STEMuser till sql.php som lägger till användarnamnet och lösenordet till databasen och sedan blir man skickad vidare till login.php för inloggning. */
        header("Location: ../register.php?err=" . urlencode("This username already exists, try again."));
    } else {
        $result = STEMUser(
            $_POST["username"], 
            AES256_Encrypt_CBC($_POST["password"]),
            isset($_POST["isadmin"]) ? "admin":""
        );
        header("Location: ../login.php");
    }
}