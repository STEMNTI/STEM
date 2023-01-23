<?php
session_name("create");
session_start();
require("post-sql.php");


// INSERT INTO `post` (`id`, `name`, `time`, `tpost`, `post`) VALUES (NULL, 'user', current_timestamp(), 'spodfgmdskfmng', 'sdgoisdgosdg');

//Detta systemet skapar ett inläg.
//Det är väldigt likt regestreringssystemet en skilnad är att här tar du namnet på användaren som är inlogad och läger in det i databasen.if(isset($_SESSION["user"])) { 

        $query = sql("INSERT INTO `post` (`id`, `name`, `time`, `tpost`, `post`) VALUES (NULL, :user, current_timestamp(), :tpost, :post);", [
            
            ":user" => "Conect login here",
            ":post" => $_POST["post"],
            ":tpost" => $_POST["tpost"]
        ]);
?>
