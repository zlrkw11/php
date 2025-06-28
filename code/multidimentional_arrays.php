<?php
    $blogs = [ 
            ['title'=>'blog 1', 'content'=>'blog 1 body'],
            ['title'=>'blog 2', 'content'=>'blog 2 body'],
            ['title'=>'blog 3', 'content'=>'blog 3 body']
             ];

    print_r($blogs);
    print_r($blogs[1]['content']);

    $blogs[] = ['title'=>'blog 4', 'content'=>'blog 4 body'];
    print_r($blogs);
    array_pop($blogs);
?>

<!DOCTYPE html>

<html>
<head>
    <title></title>
</head>
<body>
<body>
</html>