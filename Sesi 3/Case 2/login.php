<?php 
    session_start();

    $error = $_SESSION['ERROR'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>

    <form action="UserController.php" method="post">
        <input type="hidden" name="action" value="login">
        <label for="username">Username</label>
        <br>
        <input type="text" name="username">
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password">
        <br>
        <button type="submit">Login</button>
    </form>

    <?php 
        echo "<h1>$error</h1>"
    ?>

    <a href="register.php">Register</a>
</body>
</html>