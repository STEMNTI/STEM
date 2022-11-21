<!DOCTYPE html>
<html>
  <head></head>
  <body>
<?php

//used to output colored text
function color_print($color, $tag, $msg) {
  return print("<$tag style='color:$color;'>$msg</$tag><br/>");
}

if (!empty($_POST["title"]) && !empty($_POST["content"])) {
  //If both of them are not empty, do something here...
  $title = $_POST["title"];
  $content = $_POST["content"];
} else {
  //if title is empty print
  if (empty($_POST["title"])) {
    color_print("#f00", "h1", "error, title is empty");
  }

  //if content is empty print
  if (empty($_POST["content"])) {
    color_print("#f00", "h1", "error, content is empty");
  }
}
?>

</body>

</html>
