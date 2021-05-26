<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Else_If-06-04-2021</title>
</head>

<body>
<h3 align=center>69-Vishal Chaudhari-06-04-2021</h3>
<?php  
    $marks=91;      
    if ($marks<33){    
        echo "fail";    
    }    
    else if ($marks>=34 && $marks<50) {    
        echo "D grade";    
    }    
    else if ($marks>=50 && $marks<65) {    
       echo "C grade";   
    }    
    else if ($marks>=65 && $marks<80) {    
        echo "B grade";   
    }    
    else if ($marks>=80 && $marks<90) {    
        echo "A grade";    
    }  
    else if ($marks>=90 && $marks<100) {    
        echo "A+ grade";   
    }  
   else {    
        echo "Invalid input";    
    }    
?>
</body>
</html>