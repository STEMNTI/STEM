<?php
session_name("create");
session_start();
require("post-sql.php");

// TEMP
$_SESSION["USERNAME"] = "test";


//Detta systemet skapar ett inläg.
//Det är väldigt likt regestreringssystemet en skilnad är att här tar du namnet på användaren som är inlogad och läger in det i databasen.

<<<<<<< HEAD
        $query = sql("INSERT INTO `post` (`id`, `name`, `time`, `tpost`, `post`, `image`) VALUES (NULL, :user, current_timestamp(), :tpost, :post, :image);", [
            
            ":user" => $_SESSION["USERNAME"],
            ":post" => $_POST["post"],
            ":tpost" => $_POST["tpost"],
            ":image" => $_POST["image"]
        ]);
=======
// OBS!!!
// current_timestamp() är undefined
if (isset($_SESSION["user"])) {
    $query = sql("INSERT INTO `post` (`id`, `name`, `time`, `tpost`, `post`) VALUES (NULL, :user, current_timestamp(), :tpost, :post);", [
        ":user" => $_SESSION["USERNAME"],
        ":post" => $_POST["post"],
        ":tpost"=> $_POST["tpost"]
    ]);
}
>>>>>>> 02ec48b619b277bd69523d9c292f06d128145c24
?>
