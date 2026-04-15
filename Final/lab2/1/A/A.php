<?php
    if(isset($_POST['name'])){
        $name = $_REQUEST['name'];
        
        if($name == ""){
            echo "Name is empty!";
        }else{
            echo "Submitted Name: " . $name;
        }
    }else{
        echo "No name submitted. Please go back and enter a name.";
    }
?>