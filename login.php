<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logga in</title>
    <link rel="stylesheet" href="login.css">
</head>
<body class="login-body">
    <div class="login">
        <form action="./loginSystem/login.php" method="post">
            <h1>Logga In</h1>
            <div class = "email">
                <lable>Username</lable>
                <input type="text" name="username" placeholder="Användarnamn" class="input">
            </div>
            <div class = "password">
                <lable>Password</lable>
                <input type="password" name="password" placeholder="Ditt lösenord" class="input">
            </div>
            <input type="submit" name="submit" value="Logga in" class="knappar">
            <a href="register.php">Register</a>
            <?php
                echo $_GET["msg"];
            ?>
        </form>        
    </div>
</body>
</html>