<?php
    $name = "alamin";
    $id = 12;
    $cgpa = 3.5;

    echo "1.Hello world using echo<br>"; 
    print "2.Hello world using print<br>";
    // html tags support inside both 

    //print_r(Hello world);// error, it is used for array

    $std = [1, 'alamin', 2.5]; // 1d array
    echo "3.Printing full array using print_r() <br>";
    print_r($std); // correct
    //echo $std; // error


    $std = array(1, 'alamin', 4);
    //echo $std[2] "<br>"; error
    echo "<br>4.Printing 3rd value of std array using echo : " . $std[2] . "<br>";

    // 2d array
    $stds = [
        [1, 'alamin', 2.5],
        [1, 'alamin', 2.5],
        [1, 'alamin', 3.5]
    ];

    echo "5.accessing the 3rd col in 3rd row using print_r() : ";
    print_r($stds[2][2]);

    // associative array (2 ways)
    $std = ['id'=>1, 'name'=>'alamin', 'cgpa'=>2.5];
    $car = array("brand"=>"Ford", "Model"=>"Mustang");

    echo "<br>6.printing associative array std using print_r() : ";
    print_r($std);
    echo "<br>7.printing associative array car using print_r() : ";
    print_r($car);


    print("<br>8.Printing 1st value of associative array std : ");
    echo $std['id'];
    print("<br>9.Printing 1st value of associative array car : ");
    echo $car['brand'];
    
    // multi dimensional associative array
    $stds = [
        's1'=>['id'=>1, 'name'=>'alamin', 'cgpa'=>2.5],
        's2'=>['id'=>2, 'name'=>'xyz', 'cgpa'=>2.2],
        's3'=>['id'=>3, 'name'=>'abc', 'cgpa'=>2.3]
    ];

    print("<br>10.Printing 2D associative array stds : ");
    print_r($stds);

    print("<br>11.Printing 1st value of 1st row in associative array stds : ");
    print_r($stds['s2']['name']);


    print("<br>12.Printing html element using for loop : ");
    for($a=0; $a<5; $a++){
        echo "<h3>TEST</h3>";
    }

    print("<br>13.Printing all elements inside std ass. array using for loop : ");
    foreach($std as $v){
        print("<br>");
        print_r($v) ;
    }

    //print(<br><br>); // error
    print("<br><br>"); // correct

    $name="NB";
    print("14.Hello {$name} using print()");
    echo "<br>15.Hello {$name} using echo";

    // var_dump()
    //$std = ['id'=>1, 'name'=>'alamin', 'cgpa'=>2.5];
    print("<br>16.Printing std array details using var_dump() : ");
    print(var_dump($std));

?>