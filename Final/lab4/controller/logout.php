<?php
    session_start();
    unset($_SESSION['admin']);
    unset($_SESSION['status']);
    setcookie('status', '', time()-3600, '/');
    header('location: ../view/login.php');
?>