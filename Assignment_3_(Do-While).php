<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do...While -08-04-2021</title>
</head>
<body>
<h3 align=center>69-Vishal Chaudhari</h3>
<?php

$a = 1;

do {
    $b=0;
    do{
        echo "$a |";
        $b++;
    }while($b<$a);
    $a++;   // incrementing value of a by 1
    echo "<br>";
}while($a <= 10);
?>
</body>
</html>