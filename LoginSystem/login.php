<?php
require("sql.php"); // hämtar sql.php
if(isset($_POST["username"])) { //kollar om username har skickats
    $query = sql("SELECT * FROM users WHERE username = :usern AND password = :passw", [ // hämtar den information som igenom formen frågas om. 
        ":usern" => $_POST["username"], // variabel på SELECT som hämtar username från form
        ":passw" => $_POST["password"] // varaible på SELECT som hämtar password från form
    ]);

    if(isset($query[0])) { // en "facecheck", kollar om username & password finns i databasen.
        $_SESSION["username"] = $query[0]["username"];
        header("Location: homepage.php"); // skicka användare till homepage.php 
    } else {
        header("Location: index.php?msg=".urlencode("Inloggning misslyckades. Försök igen.")); // skicka användare tillbaka till index.php för login igen med meddelande på misslyckande.
    }
}
?>