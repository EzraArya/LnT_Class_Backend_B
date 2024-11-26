<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>

    <form action="UserController.php" method="post">
        <input type="hidden" name="action" value="register">
        <label for="username">Username</label>
        <br>
        <input type="text" name="username">
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password">
        <br>
        <button type="submit">Register</button>
    </form>

    <a href="login.php">Login</a>
</body>
</html>