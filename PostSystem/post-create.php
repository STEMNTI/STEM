<?php
session_name("create");
session_start();
require("post-sql.php");

// TEMP
$_SESSION["USERNAME"] = "test";


//Detta systemet skapar ett inläg.
//Det är väldigt likt regestreringssystemet en skilnad är att här tar du namnet på användaren som är inlogad och läger in det i databasen.if(isset($_SESSION["user"])) { 

        $query = sql("INSERT INTO `post` (`id`, `name`, `time`, `tpost`, `post`) VALUES (NULL, :user, current_timestamp(), :tpost, :post);", [
            
            ":user" => $_SESSION["USERNAME"],
            ":post" => $_POST["post"],
            ":tpost" => $_POST["tpost"]
        ]);
?>
