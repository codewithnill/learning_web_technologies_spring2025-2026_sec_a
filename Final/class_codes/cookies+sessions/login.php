<?php
    session_start();
    print("Printing session array : ");
    print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Submission</title>
</head>
<body>
        <form method="POST" action="login_check.php" enctype="">
            Username: <input type="text" name="username" value=""/> <br>
            Password: <input type="password" name="password" value=""/> <br>
            <input type="submit" name="submit" value="Submit"/>
        </form>
        <a href="signup.php">signup</a>
</body>
</html>