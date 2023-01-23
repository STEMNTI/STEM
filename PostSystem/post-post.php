<?php

//POSTS IN ORDER.
$posts = array_reverse($posts = mysql("SELECT * FROM `post`", [
]));

//FOR EACH POST, PRINT VALUES (CAN POST INTO DIV FOR STYLING).
foreach($posts as $post) {
    echo "".$post[`tpost`]."".$post["`post`"]."".$post["`name`"]."".$post["`time`"]."";
}
?>   