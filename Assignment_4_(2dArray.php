<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array2d -08-04-2021</title>
</head>
<body>
<h1 align=center>69-Vishal Chaudhari</h1>
<h2 align=center>Assignment 4</h2>
<?php
    $arr1 = array(
        array(1, 3),
        array(2, 5),
    );
    $arr2 = array(
        array(2, 3),
        array(4, 2),
    );

    echo "Matrix A (2 x 2): <br>";
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 2; $j++)
            echo $arr1[$i][$j] . " ";
        echo "<br>";
    }

    echo "<br>Matrix B (2 x 2): <br>";
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 2; $j++)
            echo $arr2[$i][$j] . " ";
        echo "<br>";
    }

    echo "<br>Matrix Multiplication (A X B): <br>";
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 2; $j++) {
            $arr3[$i][$j] = $arr1[$i][$j] * $arr2[$i][$j];
            echo $arr3[$i][$j] . " ";
        }
        echo "<br>";
    }
    ?>
</body>
</html>