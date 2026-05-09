<?php
    session_start();
    require_once('../model/user_model.php');
    
    // Check if ID is provided in the URL
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $status = deleteUser($id);
        
        if($status){
            // Successfully deleted
            header('location: ../view/user_list.php');
        } else {
            // Deletion failed
            echo "Delete failed! User not found or database error.";
        }
    } else {
        // No ID provided
        header('location: ../view/user_list.php');
    }
?>