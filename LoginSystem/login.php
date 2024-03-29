<?php
require("sql.php"); // hämtar sql.php
require("security.php");
session_name("STEM");
session_start();
if (isset($_POST["username"])) { //kollar om username har skickats
    // Convert any special characters present in the POST data 
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    // select the encrypted name and pass from the users table where name and pass match encrypted post values  
    $result = SignIntoUser($username, AES256_Encrypt_CBC($password));
    // if a matching row was found in users table (encrypted)
    if(isset($result[0]["username"]) && isset($result[0]["password"])) {
        // decrypt the encrypted username and password that we got from the database values from database
        $rawPass = AES256_Decrypt_CBC($result[0]["password"]); // decrypts the password in the database for the raw password 
        // compare decrypted db info with (anti dark art) post info
        if ($rawPass === $password) {
            // set username session variable and redirect to account page
            $_SESSION["username"] = $username;
            $userType = sql("SELECT user_type, password FROM users WHERE user_type = 'admin' AND password = :pass", [
                ":pass" => AES256_Encrypt_CBC($password)
            ]); // fetches the information from the database to check the usertype in the following code.
            if($userType[0]["user_type"] == "admin") { // checks if user is equal to admin
                $_SESSION["usertype"] = "admin"; // assigns session[usertype] to admin
                header("Location: admin/admin.php"); // forwards user to admin page
            } else if($userType[0]["user_type"] == null) { // checks if user isnt admin
                $_SESSION["usertype"] = ""; // assigns session[usertype] to empty (regular user)
                header("Location: ./../index.php"); // forwards user to index page
            }
        }
    } else {
        header("Location: ./../login.php?msg=" . urlencode("Inloggning misslyckades. Försök igen.")); // forwards user to login page with error message if failure of login
    }
}

?>