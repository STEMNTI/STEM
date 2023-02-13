<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post"><!--action anger vilken fil som skall ta imot information och method är vad som ska hända med informationen-->
        <label for="">Login</label><br><br>
        <input type="text" name="username" placeholder="Användarnamn"><br><br><!--skriv in användarnamn-->
        <input type="password" name="password" placeholder="Lösenord"><br><br><!--skriv in lösenord-->
        <input type="submit" name="submit" value="submit"><br><br><!--skickar informationen om användarnamn och lösenord-->
    </form>
    <a href="register_form.php">Register here!</a><br><br>
    <!-- <a href="admin.php">Admin</a> -->
</body>
</html>