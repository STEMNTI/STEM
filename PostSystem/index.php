<?php
session_name("create"); 
session_start(); 
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inläg.css">
    <title>testpost</title>
</head>
<body>
<div>
    <form action="post-create.php" method="post"> 
        <input type="text" name="tpost" id="tpost" placeholder="Titel"><br>
        <textarea type="text" name="post" id="post" placeholder="Skriv inlägg"></textarea><br>
        <input type="submit" value="Skapa">
    </form>
</div>
</body>
</html>