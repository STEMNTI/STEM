<?php
session_name("login123"); // anger namn på session 
session_start(); // startar session
session_destroy(); // avslutar session 
header("location: ./../login.php"); // skickar användare vidare tillbaka till index.php
?>