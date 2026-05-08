<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
        exit();
    }
?>

<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
            <h1>Welcome Home  <?php echo $_SESSION['user']['username']; ?></h1>
            <a href="logout.php">Logout</a>
    </body>
</html>