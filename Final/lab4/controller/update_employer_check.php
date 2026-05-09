<?php
session_start();
require_once('../model/employer_model.php');

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $employer_name = $_POST['employer_name'];
    $company_name = $_POST['company_name'];
    $contact_no = $_POST['contact_no'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // NULL Validation
    if($employer_name == "" || $company_name == "" || $contact_no == "" || $username == "" || $password == "") {
        echo "All fields are required!";
    } else {
        $employer = [
            'id' => $id,
            'employer_name' => $employer_name,
            'company_name' => $company_name,
            'contact_no' => $contact_no,
            'username' => $username,
            'password' => $password
        ];
        
        $status = updateEmployer($employer);
        if($status) {
            header('location: ../view/employer_list.php');
        } else {
            echo "Update failed!";
        }
    }
} else {
    header('location: ../view/employer_list.php');
}
?>