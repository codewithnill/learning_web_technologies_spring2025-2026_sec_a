<?php

    //print_r($_FILES);
    //validation


    $src = $_FILES['myfile']['tmp_name']; // $_FILES['myfile']['tmp_name'] ← temporary location 
    $ext = explode('.', $_FILES['myfile']['name']);  // $_FILES['myfile']['name'] ← original filename

    //Let's say the user uploads a file called: WT Project Proposal Form.docx
    // $ext = Array (
    //     [0] => "WT Project Proposal Form",  // everything before first dot
    //     [1] => "docx"                        // everything after last dot
    // )
    
    
    // 	$_FILES['myfile']['type'] ← file MIME type
    // $_FILES['myfile']['size'] ← file size in bytes

    
    $index = count($ext);  // count = 2
    $newName = time(). "." .$ext[$index-1]; // $ext[1] = "docx"
    $des = 'upload/'.$newName; 
    // New filename:
    // time() = 1746612345
    //                 ↓
    //     "1746612345" + "." + "docx" = "1746612345.docx"

    if(move_uploaded_file($src, $des)){ //  from src to des
        echo "Success!";
    }else{
        echo "Error";
    }
?>