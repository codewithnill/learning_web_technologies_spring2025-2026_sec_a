<!-- login -->

<?php
    session_start();
    
    
    if(isset($_SESSION['status']) && $_SESSION['status'] == true){
        header('location: logged_in_dashboard.php');
        exit();
    }
    
    $error = "";
    
    if(isset($_POST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        
        if($username == "" || $password == ""){
            $error = "Username and Password are required!";
        }
        else{
            // Search for user in session array
            $user_found = false;
            if(isset($_SESSION['all_users'])){
                foreach($_SESSION['all_users'] as $user){
                    if(($user['username'] == $username || $user['email'] == $username) && $user['password'] == $password){
                        $user_found = true;
                        $_SESSION['username'] = $user['username'];
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['gender'] = $user['gender'];
                        $_SESSION['dob'] = $user['dob'];
                        $_SESSION['profile_picture'] = $user['profile_picture'];
                        $_SESSION['status'] = true;
                        
                        header('location: logged_in_dashboard.php');
                        exit();
                    }
                }
            }
            
            if(!$user_found){
                $error = "Invalid username/email or password!";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

    <form method="post" action="">
        <fieldset>
            <legend><strong>Login</strong></legend>
            <label>Username : </label><input type="text" name="username"><br><br>
            <label>Password : </label><input type="password" name="password"><br><hr>
            <input type="checkbox" name="remember_me"> Remember Me <br>
            <input type="submit" name="submit" value="Submit">
            <a href="D.php">Forgot Password?</a>
        </fieldset>
    </form>

    <h5>Copyright © 2017</h5>
</body>
</html>