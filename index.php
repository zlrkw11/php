<?php
    echo 'Hello world!';
    $name = "John Doe";
    echo $name;
    define('AGE', 30);
?>

<!DOCTYPE html>

<html>
<head>
    <title>my first php file</title>
</head>
<body>
    <h1>User Profile Page</h1>
    <div>
        <?php echo $name;?>
        <?php echo AGE; ?>
    </div>
<body>
</html>