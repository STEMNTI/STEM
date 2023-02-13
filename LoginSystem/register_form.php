<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register here!</title>
</head>
<body>
<form action="register.php" method="post"><!--action anger vilken fil som skall ta imot information och method är vad som ska hända med informationen-->
        <label for="">Register here!</label><br><br>
        <input type="text" name="email" placeholder="Mail"><br><br><!--skriv in användarnamn-->
        <input type="password" name="password" placeholder="Lösenord"><br><br><!--skriv in lösenord-->
        <input type="password" name="confirmPassword" placeholder="Confirm password"><br><br>
        <input type="submit" value="submit"><br><br><!--skickar informationen om användarnamn och lösenord-->
    </form>
    <a href="index.php">Tillbaka till login.</a>
</body>
</html>