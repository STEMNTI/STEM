<?php

//POSTS IN ORDER.
$posts = array_reverse($posts = mysql("SELECT * FROM `post`", [
]));

//FOR EACH POST, PRINT VALUES (CAN POST INTO DIV FOR STYLING).
foreach($posts as $post) {
    echo "<div>".$post["`tpost`"]."<br>".$post["`post`"]."<br>".$post["`name`"]."<br>".$post["`time`"]."<br></div>";
}
?>   