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
        <input type="text" name="username" placeholder="Användarnamn"><!--skriv in användarnamn-->
        <input type="password" name="password" placeholder="Lösenord"><!--skriv in lösenord-->
        <input type="submit" value="submit"><!--skickar informationen om användarnamn och lösenord-->
    </form>
</body>
</html>