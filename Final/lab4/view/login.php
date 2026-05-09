<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <form method="POST" action="../controller/login_check.php">
        Username: <input type="text" name="username" required/> <br>
        Password: <input type="password" name="password" required/> <br>
        <input type="submit" name="submit" value="Login"/>
    </form>
</body>
</html>