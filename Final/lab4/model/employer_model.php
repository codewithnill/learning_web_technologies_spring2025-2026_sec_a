<?php
    require_once('db.php');

    function addEmployer($employer) {
        $con = getConnection();
        $sql = "INSERT INTO employers (employer_name, company_name, contact_no, username, password) 
                VALUES ('{$employer['employer_name']}', '{$employer['company_name']}', 
                        '{$employer['contact_no']}', '{$employer['username']}', '{$employer['password']}')";
        
        if(mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function getAllEmployers() {
        $con = getConnection();
        $sql = "SELECT * FROM employers";
        $result = mysqli_query($con, $sql);
        
        $employers = [];
        while($row = mysqli_fetch_assoc($result)) {
            $employers[] = $row;
        }
        return $employers;
    }

    function getEmployerById($id) {
        $con = getConnection();
        $sql = "SELECT * FROM employers WHERE id = {$id}";
        $result = mysqli_query($con, $sql);
        
        if(mysqli_num_rows($result) == 1) {
            return mysqli_fetch_assoc($result);
        } else {
            return null;
        }
    }

    function updateEmployer($employer) {
        $con = getConnection();
        $sql = "UPDATE employers 
                SET employer_name = '{$employer['employer_name']}', 
                    company_name = '{$employer['company_name']}', 
                    contact_no = '{$employer['contact_no']}', 
                    username = '{$employer['username']}',
                    password = '{$employer['password']}'
                WHERE id = {$employer['id']}";
        
        if(mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    
    function deleteEmployer($id) {
        $con = getConnection();
        $sql = "DELETE FROM employers WHERE id = {$id}";
        
        if(mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function searchEmployer($keyword) {
        $con = getConnection();
        $sql = "SELECT * FROM employers 
                WHERE employer_name LIKE '%{$keyword}%' 
                OR company_name LIKE '%{$keyword}%'
                OR username LIKE '%{$keyword}%'";
        $result = mysqli_query($con, $sql);
        
        $employers = [];
        while($row = mysqli_fetch_assoc($result)) {
            $employers[] = $row;
        }
        return $employers;
    }

    function loginAdmin($username, $password) {
        $con = getConnection();
        $sql = "SELECT * FROM admin WHERE username = '{$username}' AND password = '{$password}'";
        $result = mysqli_query($con, $sql);
        
        if(mysqli_num_rows($result) == 1) {
            return true;
        } else {
            return false;
        }
    }
?>