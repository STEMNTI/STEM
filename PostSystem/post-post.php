<?php
session_name("create");
session_start();
require("post-sql.php");

//IF THE VALUE ISNT PICKED YET IT SHOWS ALL POSTS
if(empty($_POST["filtervalue"])) { 
    $posts = array_reverse($posts = sql("SELECT * FROM posts", [
    
    ]));
 } else {
//OTHERWISE SHOWS THE VALUE OF THE FILTER
    $posts = array_reverse($posts = sql("SELECT * FROM posts WHERE filtervalue = :VALUE", [
        ":VALUE" => $_POST["filtervalue"]
    ]));
 }

//PRINTS OUT ALL POSTS SELECTED
foreach($posts as $post) {
    echo "<div><h2>".$post["user"]."</h2><p>".$post["posttxt"]."</p><h4>".$post["time"]."</h4><br><br></div>";
}
?>   


