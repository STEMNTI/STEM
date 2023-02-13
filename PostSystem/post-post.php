<?php
session_name("create");
session_start();
require("post-sql.php");

//POSTS IN ORDER.
$posts = array_reverse($posts = sql("SELECT * FROM posts", [
]));

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
    echo "<div>".$post["tpost"]."<br>".$post["post"]."<br>".$post["name"]."<br>".$post["time"]."<br><img src='/STEM/PostSystem/Images/" . $post["Image"] . "' alt=''></div>";
}
?>   


