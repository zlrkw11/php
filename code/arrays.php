<?php
    // indexed arrays
    $peopleOne = ['John', 'Jane', 'Doe'];
    $peopleTwo = array('John', 'Jane', 'Doe');
    $numbers = [20, 30, 40, 50];
    echo $peopleOne[0]; 
    echo $peopleTwo[0];
    
    // whenever we echo something, we need a string
    print_r($numbers);

    // add a new item to the end of an array 
    $numbers[]=60;
    array_push($numbers, 70);

    // array length
    echo count($numbers);

    // merge arrays
    $peopleThree = array_merge($peopleOne, $peopleTwo);
    print_r($peopleThree);

    // associative arrays (key & value pairs)
    $cars = ['toyota'=>'prius', 'mitsubishi'=>'lancer', 'ford'=>'mustang'];
    echo $cars['toyota'];
    print_r($cars);
    $cars['toyota']= 'corolla'; // change value
    print_r($cars);

?>

<!DOCTYPE html>

<html>
<head>
    <title></title>
</head>
<body>
<body>
</html>