<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Array -08-04-2021</title>
</head>
<body>
<h1 align=center>69-Vishal Chaudhari</h1>
<h2 align=center>Assignment 4</h2>
<?php
    echo "1D Number Sorting<br>";
    $num = array(1 , 5 , 3 , 4 , 12, 6 , 8 ,9);
    sort($num);
    for ($x = 0; $x < count($num); $x++) {
        echo $num[$x];
        echo "<br>";
    }

    echo "<br><Br>";

    echo "1D String Sort<br>";

    $name = array('Vishal', 'Sonu', 'Jayesh', 'Atul','Chetan', 'Rohit');
    sort($name);
    for ($x = 0; $x < count($name); $x++) {
        echo $name[$x];
        echo "<br>";
    }

    echo "<br><br>";

    echo "1D String reverse sort<br>";
    rsort($name);
    for ($x = 0; $x < count($name); $x++) {
        echo $name[$x];
        echo "<br>";
    }

    echo "<br><br>";

    echo "Key Sort<br>";

    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    ksort($age);

    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    ?>


</body>
</html>