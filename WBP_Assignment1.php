<?php
    $no1 = 20;
    $no2 = 10;

    echo "<b>Numbers</b><br/>";
    echo "First No, :- $no1<br/>";
    echo "Second No. :- $no2<br/>";
   
    echo "<br/><br /><b>1. ARITHMETIC OPERATORS</b><br/>******************************<br>";
    $add = $no1 + $no2;
    echo "Addition of $no1 + $no2 :- $add<br/>";
    $sub = $no1 - $no2;
    echo "Subtraction of $no1 + $no2  :- $sub<br/>";
    $mul = $no1 * $no2;
    echo "Multiplication of $no1 + $no2 :- $mul<br/>";
    $div = $no1 / $no2;
    echo "Division of $no1 + $no2 :- $div<br/>";
    $mod = $no1 % $no2;
    echo "Modulus of $no1 + $no2 :- $mod<br/>";

    echo "<br/><br /><b>2. ASSIGNMENT OPERATORS</b><br/>******************************<br>";
    echo "no1 = no2 :- ",($no1 = $no2),'<br/>';
    echo "no1 += no2 :- ",($no1 += $no2),'<br/>';
    echo "no1 -= no2 :- ",($no1 -= $no2),'<br/>';
    echo "no1 *= no2 :- ",($no1 *= $no2),'<br/>';
    echo "no1 /= no2 :- ",($no1 /= $no2),'<br/>';
    echo "no1 %= no2 :- ",($no1 %= $no2),'<br/>';

    echo "<br/><br /><b>3. COMPARISON OPERATORS</b><br/>******************************<br>";
    echo "no1 == no2 :- ",($no1 == $no2) ? 'True <br/>' : 'False <br/>';
    echo "no1 != no2 :- ",($no1 != $no2)? 'True <br/>' : 'False <br/>';
    echo "no1 <> no2 :- ",($no1 <> $no2) ? 'True <br/>' : 'False <br/>';
    echo "no1 !== no2 :- ",($no1 !== $no2)? 'True <br/>' : 'False <br/>';
    echo "no1 < no2 :- ",($no1 < $no2) ? 'True <br/>' : 'False <br/>';
    echo "no1 > no2 :- ",($no1 > $no2)? 'True <br/>' : 'False <br/>';
    echo "no1 >= no2 :- ",($no1 <= $no2) ? 'True <br/>' : 'False <br/>';
    echo "no1 <= no2 :- ",($no1 >= $no2)? 'True <br/>' : 'False <br/>';
   
   
    echo "<br/><br /><b>4. INCREMENT / DECREMENT OPERATORS</b><br/>*****************************************<br>";
    echo "no1 - Post Increment :- ",$no1++,"<br/>";
    echo "no2 - Post Increment :- ",$no2++,"<br/>";
    echo "no1 - Pre Increment :- ",++$no1,"<br/>";
    echo "no2 - Pre Increment :- ",++$no2,"<br/>";
    echo "no1 - Post Decrement :- ",$no1--,"<br/>";
    echo "no2 - Post Decrement :- ",$no2--,"<br/>";
    echo "no1 - Pre Decrement :- ",--$no1,"<br/>";
    echo "no2 - Pre Decrement :- ",--$no2,"<br/>";
   
   
    echo "<br/><br /><b>5. LOGICAL OPERATORS AND TERNARY OPERATOR</b><br/>*********************************************<br>";
    echo "no1 and no2 :- ",($no1 and $no2) ? 'True <br/>' : 'False <br/>';
    echo "no1 or no2 :- ",($no1 or $no2) ? 'True <br/>' : 'False <br/>';
    echo "no1 xor no2 :- ",($no1 xor $no2) ? 'True <br/>' : 'False <br/>';
    echo "no1 && no2 :- ",($no1 && $no2) ? 'True <br/>' : 'False <br/>';
    echo "no1 || no2 :- ",($no1 || $no2) ? 'True <br/>' : 'False <br/>';
   
    
    echo "<br/><br /><b>6. BITWISE OPERATORS</b><br/>******************************<br>";
    echo "no1 & no2 :- ",($no1 & $no2),'<br/>';
    echo "no1 | no2 :- ",($no1 | $no2),'<br/>';
    echo "no1 ^ no2 :- ",($no1 ^ $no2),'<br/>';
    echo "no1 << no2 :- ",($no1 << $no2),'<br/>';
    echo "no1 >> no2 :- ",($no1 >> $no2),'<br/>';
    echo "~no1 :- ",(~$no1),'<br/>';
    echo "~no2 :- ",(~$no2),'<br/>';

    echo "<br/><br /><b>7. DATA TYPE CHECKING</b><br/>******************************<br>";
    
    echo "Var1 = ABC"; echo "&nbsp&nbsp";  
    echo "Var2 = 10<br/>";
    $var1 = "ABC";
    $var2 = 10;
    $var3 = true;
    $var4 = pow(10, 0.5);
    echo "var1 is of ",gettype($var1)," type <br/>";
    echo "var2 is of ",gettype($var2)," type <br/>";
    echo "var3 is of ",gettype($var3)," type <br/>";
    echo "var4 is of ",gettype($var4)," type <br/>";

    echo "<br/><br/> <b>8. CONSTANTS</b><br/>******************************<br>";
    define("Hi","This Is Assignment_1 PHP");
    echo Hi;
?>