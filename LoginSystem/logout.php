<?php
session_name("login123"); // anger namn på session 
session_start(); // startar session
unset($_SESSION["login123"]); // avslutar session 
header("location:index.php"); // skickar användare vidare tillbaka till index.php
?>