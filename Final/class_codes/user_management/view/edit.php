<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
        exit();
    }
    require_once('../model/user_model.php');
    $id = $_GET['id'];
    $user = getUserById($id); // ✅ Fetch from database
    // $users = $_SESSION['users']; // ❌ Uses session, not database
    // $user =[];
    // foreach($users as $u){
    //     if($id == $u['id']){
    //         $user = $u;
    //         //$u['username'] = $username; 
    //         //$u['email'] = $email; 
    //         break;
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
</head>
<body>
        <a href="user_list.php">Back</a> |
        <a href="../controller/logout.php">Logout</a> 
        <br>
        
        <form method="POST" action="../controller/update_check.php" enctype="">
            <fieldset>
                <legend>Edit User</legend>
                ID: <input type="text" name="id" readonly value="<?php echo $user['id']; ?>"/> <br>
                Username: <input type="text" name="username" value="<?php echo $user['username']; ?>"/> <br>
                Email: <input type="email" name="email" value="<?php echo $user['email']; ?>"/> <br>
                    <input type="submit" name="submit" value="Update"/>
            </fieldset>
        </form>
        <!-- <a href="login.php">login</a> -->
</body>
</html>