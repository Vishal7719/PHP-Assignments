<?php

class Area{
    function __call($name,$arg){
        if($name == 'area')
        switch(count($arg)){   
            case 0 : return 0 ;
            case 1 : return $arg[0] * $arg[0] ;
            case 2 : return $arg[0] * $arg[1];
        }
    }
}

$square = new Area();
echo "Area of Square :- ".$square->area(10)."<br>";
$rect = new Area();
echo "Area of Rectangle :- ".$rect->area(10,20)."<br>";
?>