<?php
    session_start();
    if(!isset($_COOKIE['status'])) {
        header('location: login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Home</title>
</head>
<body>
    <h1>Welcome Admin: <?php echo $_SESSION['admin']; ?></h1>
    <hr>
    <a href="register_employer.php">Register New Employer</a> <br>
    <a href="employer_list.php">View All Employers</a> <br>
    <a href="search.php">Search Employer (AJAX + JSON)</a> <br>
    <a href="../controller/logout.php">Logout</a>
</body>
</html>