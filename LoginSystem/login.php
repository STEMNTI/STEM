<?php
require("sql.php"); // hämtar sql.php
require("security.php");
session_start();
if (isset($_POST["username"])) { //kollar om username har skickats
    // Convert any special characters present in the POST data 
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    // select the encrypted name and pass from the users table where name and pass match encrypted post values
   /*  $result = SignIntoUser("SELECT username, password FROM users WHERE username = :name AND password = :pass", [
        ":name" => AES256_Encrypt_CBC($username),
        ":pass" => AES256_Encrypt_CBC($password),
    ]); */    
    $result = SignIntoUser(AES256_Encrypt_CBC($username), AES256_Encrypt_CBC($password));
    // if a matching row was found in users table (encrypted)
    if (isset($result[0]["username"]) && isset($result[0]["password"])) {
        // decrypt the encrypted username and password that we got from the database values from database
        $rawName = AES256_Decrypt_CBC($result[0]["username"]);
        $rawPass = AES256_Decrypt_CBC($result[0]["password"]);
        $username = AES256_Decrypt_CBC($username);
        $password = AES256_Decrypt_CBC($password);
        
        // compare decrypted db info with (anti dark art) post info
        if ($rawName === $username && $rawPass === $password) {
            // set username session variable and redirect to account page
            $_SESSION["username"] = $rawName;
            $userType = sql("SELECT user_type, password FROM users WHERE user_type = 'admin' AND password = :pass", [
                ":pass" => AES256_Encrypt_CBC($password)
            ]);
            if($userType[0]["user_type"] == "admin") {
                $_SESSION["usertype"] = "admin";
                header("Location: admin/admin.php");
            } else if($userType[0]["user_type"] == null) {
                header("Location: ../index.php");
            } else {
                header("Location: index.php?msg=" . urlencode("Inloggning misslyckades. Försök igen."));
            }
        }
    }
}

?>