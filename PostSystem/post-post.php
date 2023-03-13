<?php
session_name("create");
session_start();
require("post-sql.php");

//PRINTS OUT ALL POSTS SELECTED
foreach($posts as $post) {
    echo "<div>".$post["tpost"]."<br>".$post["post"]."<br>".$post["name"]."<br>".$post["time"]."<br><img src='/STEM/PostSystem/Images/'" . $post["Image"] . "' alt=''></div>";
}
?>   


