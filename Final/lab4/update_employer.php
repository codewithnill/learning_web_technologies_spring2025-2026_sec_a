<?php
    session_start();
    if(!isset($_COOKIE['status'])) {
        header('location: login.php');
        exit();
    }
    require_once('../model/employer_model.php');

    $id = $_GET['id'];
    $employer = getEmployerById($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Employer</title>
</head>
<body>
    <h2>Update Employer Information</h2>
    <a href="employer_list.php">Back</a> | <a href="../controller/logout.php">Logout</a>
    <hr>
    
    <form method="POST" action="../controller/update_employer_check.php">
        <input type="hidden" name="id" value="<?php echo $employer['id']; ?>">
        Employer Name: <input type="text" name="employer_name" value="<?php echo $employer['employer_name']; ?>" required/> <br>
        Company Name: <input type="text" name="company_name" value="<?php echo $employer['company_name']; ?>" required/> <br>
        Contact No: <input type="text" name="contact_no" value="<?php echo $employer['contact_no']; ?>" required/> <br>
        Username: <input type="text" name="username" value="<?php echo $employer['username']; ?>" required/> <br>
        Password: <input type="password" name="password" value="<?php echo $employer['password']; ?>" required/> <br>
        <input type="submit" name="submit" value="Update"/>
    </form>
</body>
</html>