<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="login.css">
</head>
<body class="login-body">
    <div class="login">
        <form action="./loginSystem/register.php" method="post">
            <h1>Register</h1>
            <div class = "email">
                <label>Username</label>
                <input type="text" name="username" placeholder="Användarnamn" class="input">
            </div>
            <div class = "password">
                <label>Password</label>
                <input type="password" name="password" placeholder="Ditt lösenord" class="input">
                <label>Confirm Password</label>
                <input type="password" name="confirmPassword" placeholder="Confirm password" class="input">
            </div>
            <input type="submit" name="submit" value="Register" class="knappar">
            <a href="login.php">Login</a>
            <?php
                if(isset($_GET["err"])) {
                    echo $_GET["err"];
                }
            ?>
        </form>        
    </div>
</body>
</html>