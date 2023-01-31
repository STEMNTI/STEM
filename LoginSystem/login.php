<?php
require("sql.php"); // hämtar sql.php
<<<<<<< Updated upstream
require("security.php");

if (isset($_POST["username"])) { //kollar om username har skickats
    // Convert any special characters present in the POST data 
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    // select the encrypted username and password from the users table where name and pass match encrypted post values
    $result = sql("SELECT username, password FROM users WHERE username = :name AND password = :pass", [
        ":name" => AES256_Encrypt_CBC($username),
        ":pass" => AES256_Encrypt_CBC($password),
=======
if(isset($_POST["username"])) { //kollar om username har skickats

    $query = sql("SELECT * FROM users WHERE username = :usern AND password = :passw", [ // hämtar den information som igenom formen frågas om. 
        ":usern" => $_POST["username"], // variabel på SELECT som hämtar username från form
        ":passw" => $_POST["password"] // varaible på SELECT som hämtar password från form
>>>>>>> Stashed changes
    ]);
    if($query["users"]["user_type"] == "admin") {
        header("Location: ../admin/admin.php");
    }

    // if a matching row was found in users table (encrypted)
    if (isset($result[0]["username"]) && isset($result[0]["password"])) {
        // decrypt the encrypted username and password that we got from the database values from database
        $rawName = AES256_Decrypt_CBC($result[0]["username"]);
        $rawPass = AES256_Decrypt_CBC($result[0]["password"]);

        // compare decrypted db info with the (htmlspecialchars converted) POST data 
        if ($rawName === $username && $rawPass === $password) {
            // set username session variable and redirect to account page
            $_SESSION["username"] = $rawName;

            header("Location: homepage.php");
        }
    } else {
        header("Location: index.php?msg=" . urlencode("Inloggning misslyckades. Försök igen.")); // skicka användare tillbaka till index.php för login igen med meddelande på misslyckande.
    }
}

?>