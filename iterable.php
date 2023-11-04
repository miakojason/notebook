<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function printlterable(iterable $mylterable){
    foreach($mylterable as $item){
        echo $item."<br>";
    }
}

$arr=["cat","dog","pig"];
printlterable($arr);
    ?>
</body>
</html>