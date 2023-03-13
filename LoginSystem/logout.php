<?php
session_name("STEM"); // anger namn på session 
session_start(); // startar session
session_destroy(); // avslutar session 
header("location: ./../login.php"); // skickar användare vidare tillbaka till index.php
?>