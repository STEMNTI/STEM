<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create user - Admin</title>
</head>
<body>
    <form action="register.php">
        <input type="text" name="username" placeholder="username"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <input type="password" name="confirmPassword" placeholder="confirm password"><br><br>
        <select name="user_type">
            <option value="admin">admin</option>
            <option value="user">user</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>