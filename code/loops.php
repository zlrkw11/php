<?php
    $fruits = ['apple', 'banana', 'cherry', 'pear'];
    for($i = 0; $i < count($fruits); $i++){
        echo $fruits[$i] . '<br/>';
    }

    foreach($fruits as $fruit){
        echo $fruit . '<br/>';
    }

    // multidimensional & associative array 
    $cars = [['brand'=>'toyota', 'model'=>'prius'], ['brand'=>'mitsubishi', 'model'=>'lancer'], ['brand'=>'ford', 'model'=>'mustang']];
    foreach($cars as $car){
        echo $car['brand'] . ' - ' . $car['model'] . '<br/>';
    }

    // initialize i outside
    $x = 0;
    while ($x < count($cars)){
        echo $cars[$x]['brand'];
        echo '<br/>';
        $x++;
    }
?>

<!DOCTYPE html>

<html>
<head>
    <title></title>
</head>
<body>
    <h1>Cars</h1>
    <?php foreach($cars as $car) { ?>
        <h3><?php echo $car['brand']; ?></h3>
        <p><?php echo $car['model']; ?></p>
    <?php } ?>
</body>
</html>