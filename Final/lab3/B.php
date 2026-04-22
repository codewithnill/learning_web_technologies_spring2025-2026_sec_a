<!-- sign up -->

<?php
    session_start();
    

    if(!isset($_SESSION['all_users'])){
        $_SESSION['all_users'] = []; // creating empty array
    }



    
    
    if(isset($_POST['submit'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $confirm_password = $_REQUEST['confirm_password'];
        $gender = $_REQUEST['gender'] ?? ""; // no value if not selected
        $dd = $_REQUEST['dd'] ?? "";
        $mm = $_REQUEST['mm'] ?? "";
        $yyyy = $_REQUEST['yyyy'] ?? "";
        
        $dob = $dd . "/" . $mm . "/" . $yyyy; // $dob = "dd/mm/yyyy" storing in this format
        
        $new_user = [
            'username' => $name,
            'email' => $email,
            'password' => $password,
            'gender' => $gender,
            'dob' => $dob,
            'profile_picture' => null
        ];
        
        $_SESSION['all_users'][] = $new_user;
        
        header('location: C.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form method="post" action="">
        <a href="A.php">Home | </a>
        <a href="C.php">Login |</a>
        <a href="B.php">Registration</a>
        <br><br>

        <fieldset>
            <legend><strong>Registration</strong></legend>
            <label>Name : </label><input type="text" name="name"><br><hr>
            <label>Email : </label><input type="email" name="email"><br><hr>
            <label>Password : </label><input type="password" name="password"><br><hr>
            <label>Confirm Password : </label><input type="password" name="confirm_password"><br><hr>
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
            </fieldset>

            <hr>

            <fieldset>
                <legend>Date of Birth</legend>
                <input type="text" name="dd"> /
                <input type="text" name="mm"> /
                <input type="text" name="yyyy"> <i>(dd/mm/yyyy)</i>
            </fieldset>
            
            <hr>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" value="Reset">
        </fieldset>
    </form>

    <h5>Copyright © 2017</h5>
</body>
</html>