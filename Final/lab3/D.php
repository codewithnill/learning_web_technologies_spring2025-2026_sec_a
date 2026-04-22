<!-- forgot pass -->
<?php
    session_start();
    
    
    if(isset($_SESSION['status']) && $_SESSION['status'] == true){
        header('location: logged_in_dashboard.php');
        exit();
    }
    
    $error = "";
    $success = "";





    
    
    if(isset($_POST['reset_password'])){
        $email = $_POST['email'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        
        if($email == "" || $new_password == "" || $confirm_password == ""){
            $error = "All fields are required!";
        }
        elseif($new_password != $confirm_password){
            $error = "Passwords do not match!";
        }
        else{
            
            $user_found = false;
            foreach($_SESSION['all_users'] as $index => $user){
                if($user['email'] == $email){
                    $_SESSION['all_users'][$index]['password'] = $new_password;
                    $user_found = true;
                    break;
                }
            }
            
            if($user_found){
                $success = "Password reset.!";
            } else {
                $error = "Email not exist!!";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <a href="A.php">Home | </a>
    <a href="C.php">Login |</a>
    <a href="B.php">Registration</a>
    <br><br>

    <?php
    if($error != ""){
        echo '<p style="color:red;">' . $error . '</p>';
    }
    ?>
    
    <?php
    if($success != ""){
        echo '<p style="color:green;">' . $success . '</p>';
        echo '<a href="C.php">Go to Login</a>';
    }
    ?>

    <?php
    if($success == ""){
    ?>
    <form method="post" action="">
        <fieldset>
            <legend>Forgot Password</legend>
            <label>Email : </label><input type="email" name="email"><br><hr>
            <label>New Password : </label><input type="password" name="new_password"><br><hr>
            <label>Confirm Password : </label><input type="password" name="confirm_password"><br><hr>
            <input type="submit" name="reset_password" value="Reset Password">
        </fieldset>
    </form>
    <?php
    }
    ?>

    <h5>Copyright © 2017</h5>
</body>
</html>