<?php

    // Create connection
    // $conn = new mysqli($servername, $username, $password, $dbname);
    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');

    if(!$con){ // becomes false when password empty
        echo "DB connection error!";
    }

    // $sql = "insert into users values(null, 'webtech', 'webtech123', 'webtech@gmail.com')";
    // if(mysqli_query($con, $sql)){
    //     echo "New user added!";
    // }else{
    //     echo "User not added!";
    // }


    $sql1 = "select * from users";
    $result = mysqli_query($con, $sql1);
    

    // for($i=0; $i<mysqli_num_rows($result); $i++){
    //     $row = mysqli_fetch_assoc($result);
    //     print_r($row);
    //     echo "<br>";
    // }

    // mysqli_num_rows($result)
    // Counts how many rows were returned by your SELECT query.

    // mysqli_fetch_assoc($result)
    // Fetches one row from the result set as an associative array (where column names are the keys)
    while($row = mysqli_fetch_assoc($result)){ //  loops through all the rows returned from database query, one by one, until no rows are left.
        print_r($row);
        echo "<br>";
    }

?>