<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $great=function($name){
        printf("Hello %s\r\n",$name);
    };
    $great("World!");
    $great("PHP");
    ?>
</body>
</html>