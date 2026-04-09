<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6</title>
</head>
<body>
    
</body>
</html>

<?php
    // numeric array
    $numbers = [10, 25, 37, 48, 59, 62, 74, 89, 90, 100];
    $search = 59;
    $found = false;

    for ($i=0; $i<count($numbers); $i++) {
        if ($numbers[$i] == $search) {
            $found = true;
            break;
        }
    }

    if($found) {
        echo "Found.";
    } else {
        echo "Not found.";
    }

    echo "<br>Array elements: ";
    for ($i = 0; $i < count($numbers); $i++) {
        echo $numbers[$i] . " ";
    }


?>