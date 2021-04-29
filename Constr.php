<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor-28-04-2021</title>
</head>

<body>
<?php

class Triangle{
    var $height = 1;
    var $base = 1;
    function __construct($height,$base){
        $this -> height = $height;
        $this -> base = $base;
        echo "Height of Triangle = ".$this->height."<br>";
        echo "Base of Triangle = ".$this->base."<br>";
    }

    function area(){
        echo "Area of Triangle is ".($this -> height * $this -> base)/2;
    }
}

$tri = new Triangle(30,20);
$tri -> area();

?>
</body>
</html>