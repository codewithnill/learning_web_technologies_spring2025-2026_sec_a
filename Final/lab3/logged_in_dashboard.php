<?php
    session_start();
    
    if(!isset($_SESSION['status']) || $_SESSION['status'] != true){
        header('location: C.php');
        exit();
    }
    
    
    if(isset($_GET['page']) && $_GET['page'] == 'logout'){
        setcookie('remember_username', '', time() - 3600, '/');
        
        session_destroy();
        
        
        header('location: C.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <table border="1" width="50%">
        
        <tr>
            <td colspan="2">
                <h4 style="display: inline;">X company</h4>
                <span style="float: right;">Logged in as <?php echo $_SESSION['username']; ?> | <a href="?page=logout">Logout</a></span>
            </td>
        </tr>

        <!-- valign top is for aligning content to the top -->
        <tr valign="top">
            <td width="30%" valign="top">
                <h3>Account</h3>
                <hr>
                <ul>
                    <!-- url parameters -->
                    <li><a href="?page=dashboard">Dashboard</a></li>
                    <li><a href="?page=view_profile">View Profile</a></li>
                    <li><a href="?page=edit_profile">Edit Profile</a></li>
                    <li><a href="?page=change_picture">Change Profile Picture</a></li>
                    <li><a href="?page=change_password">Change Password</a></li>
                    <li><a href="?page=logout">Logout</a></li>
                </ul>
            </td>
            
            <td width="70%" valign="top">
                <?php
                    $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
                    
                    if($page == 'dashboard') {
                        echo '<h3>Welcome ' . $_SESSION['username'] . '!</h3>';
                        echo '<p>This is your dashboard.</p>';
                    }
                    elseif($page == 'view_profile') {
                        echo '<fieldset>';
                        echo '<legend><strong>PROFILE</strong></legend>';
                        echo '<strong>Name:</strong> ' . $_SESSION['username'] . '<hr>';
                        echo '<strong>Email:</strong> ' . $_SESSION['email'] . '<hr>';
                        echo '<strong>Gender:</strong> ' . $_SESSION['gender'] . '<hr>';
                        echo '<strong>Date of Birth:</strong> ' . $_SESSION['dob'] . '<hr>';
                        echo '<a href="?page=edit_profile">Edit Profile</a>';
                        echo '</fieldset>';
                    }
                    elseif($page == 'edit_profile') {
                        echo '<fieldset>';
                        echo '<legend><strong>EDIT PROFILE</strong></legend>';
                        echo '<form method="post" action="?page=update_profile">';
                        echo '<strong>Name:</strong><br><input type="text" name="username" value="' . $_SESSION['username'] . '"><br><br>';
                        echo '<strong>Email:</strong><br><input type="email" name="email" value="' . $_SESSION['email'] . '"><br><br>';
                        echo '<strong>Gender:</strong><br>';
                        echo '<input type="radio" name="gender" value="Male" ' . ($_SESSION['gender'] == 'Male' ? 'checked' : '') . '> Male ';
                        echo '<input type="radio" name="gender" value="Female" ' . ($_SESSION['gender'] == 'Female' ? 'checked' : '') . '> Female ';
                        echo '<input type="radio" name="gender" value="Other" ' . ($_SESSION['gender'] == 'Other' ? 'checked' : '') . '> Other<br><br>';
                        echo '<strong>Date of Birth:</strong><br>';
                        echo '<input type="text" name="dob" value="' . $_SESSION['dob'] . '"> <small>(dd/mm/yyyy)</small><br><br>';
                        echo '<input type="submit" name="submit" value="Update">';
                        echo '</form>';
                        echo '</fieldset>';
                    }
                    elseif($page == 'change_picture') {
                        echo '<fieldset>';
                        echo '<legend><strong>CHANGE PROFILE PICTURE</strong></legend>';
                        echo '<form method="post" action="?page=update_picture" enctype="multipart/form-data">';
                        echo '<strong>Current Picture:</strong><br>';
                        if(isset($_SESSION['profile_picture']) && $_SESSION['profile_picture'] != null){
                            echo '<img src="' . $_SESSION['profile_picture'] . '" width="100"><br><br>';
                        } else {
                            echo 'No profile picture set<br><br>';
                        }
                        echo '<strong>Upload New Picture:</strong><br>';
                        echo '<input type="file" name="profile_picture"><br><br>';
                        echo '<input type="submit" name="submit" value="Upload">';
                        echo '</form>';
                        echo '</fieldset>';
                    }
                    elseif($page == 'change_password') {
                        echo '<fieldset>';
                        echo '<legend><strong>CHANGE PASSWORD</strong></legend>';
                        echo '<form method="post" action="?page=update_password">';
                        echo '<strong>Current Password:</strong><br><input type="password" name="current_password"><br><br>';
                        echo '<strong>New Password:</strong><br><input type="password" name="new_password"><br><br>';
                        echo '<strong>Confirm New Password:</strong><br><input type="password" name="confirm_password"><br><br>';
                        echo '<input type="submit" name="submit" value="Change Password">';
                        echo '</form>';
                        echo '</fieldset>';
                    }
                    elseif($page == 'update_profile' && isset($_POST['submit'])) {
                        // Update session data
                        $_SESSION['username'] = $_POST['username'];
                        $_SESSION['email'] = $_POST['email'];
                        $_SESSION['gender'] = $_POST['gender'];
                        $_SESSION['dob'] = $_POST['dob'];
                        
                        // Also update in all_users array
                        if(isset($_SESSION['all_users'])){
                            foreach($_SESSION['all_users'] as $index => $user){
                                if($user['email'] == $_SESSION['email']){
                                    $_SESSION['all_users'][$index]['username'] = $_POST['username'];
                                    $_SESSION['all_users'][$index]['email'] = $_POST['email'];
                                    $_SESSION['all_users'][$index]['gender'] = $_POST['gender'];
                                    $_SESSION['all_users'][$index]['dob'] = $_POST['dob'];
                                    break;
                                }
                            }
                        }
                        
                        echo '<p style="color:green;">Profile updated successfully!</p>';
                        echo '<a href="?page=view_profile">View Profile</a>';
                    }
                    elseif($page == 'update_password' && isset($_POST['submit'])) {
                        $current = $_POST['current_password'];
                        $new = $_POST['new_password'];
                        $confirm = $_POST['confirm_password'];
                        
                        
                        $current_password_correct = false;
                        if(isset($_SESSION['all_users'])){
                            foreach($_SESSION['all_users'] as $user){
                                if($user['email'] == $_SESSION['email'] && $user['password'] == $current){
                                    $current_password_correct = true;
                                    break;
                                }
                            }
                        }
                        
                        if(!$current_password_correct){
                            echo '<p style="color:red;">Current password is incorrect!</p>';
                        }
                        elseif($new != $confirm){
                            echo '<p style="color:red;">New password and confirm password do not match!</p>';
                        }
                        elseif(strlen($new) < 6){
                            echo '<p style="color:red;">Password must be at least 6 characters!</p>';
                        }
                        else{
                            
                            foreach($_SESSION['all_users'] as $index => $user){
                                if($user['email'] == $_SESSION['email']){
                                    $_SESSION['all_users'][$index]['password'] = $new;
                                    break;
                                }
                            }
                            echo '<p style="color:green;">Password changed!!!</p>';
                        }
                        echo '<a href="?page=change_password">Back</a>';
                    }
                    elseif($page == 'update_picture' && isset($_POST['submit'])){
                        if(isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0){
                            $target_dir = "uploads/";
                            if(!is_dir($target_dir)){
                                mkdir($target_dir, 0777, true);
                            }
                            $file_name = time() . "_" . basename($_FILES['profile_picture']['name']);
                            $target_file = $target_dir . $file_name;
                            
                            if(move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_file)){
                                $_SESSION['profile_picture'] = $target_file;
                                
                                
                                foreach($_SESSION['all_users'] as $index => $user){
                                    if($user['email'] == $_SESSION['email']){
                                        $_SESSION['all_users'][$index]['profile_picture'] = $target_file;
                                        break;
                                    }
                                }
                                echo '<p style="color:green;">Profile pic uploaded successfully!</p>';
                            } else {
                                echo '<p style="color:red;">Failed to pic!</p>';
                            }
                        } else {
                            echo '<p style="color:red;">Please select a file to upload!</p>';
                        }
                        echo '<a href="?page=change_picture">Back</a>';
                    }
                    else {
                        echo '<h3>Welcome ' . $_SESSION['username'] . '.</h3>';
                    }
                ?>
            </td>
        </tr>


        <tr>
            <td colspan="2" align="center">
                <h5>Copyright © 2017</h5>
            </td>
        </tr>
    </table>
</body>
</html>