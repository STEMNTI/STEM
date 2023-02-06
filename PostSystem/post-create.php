<?php
session_name("create");
session_start();
require("post-sql.php");

// TEMP
$_SESSION["USERNAME"] = "test";


//Detta systemet skapar ett inläg.
//Det är väldigt likt regestreringssystemet en skilnad är att här tar du namnet på användaren som är inlogad och läger in det i databasen.

        $query = sql("INSERT INTO `post` (`id`, `name`, `time`, `tpost`, `post`, `image`) VALUES (NULL, :user, current_timestamp(), :tpost, :post, :image);", [
            
            ":user" => $_SESSION["USERNAME"],
            ":post" => $_POST["post"],
            ":tpost" => $_POST["tpost"],
            ":image" => $_POST["image"]
        ]);
?>