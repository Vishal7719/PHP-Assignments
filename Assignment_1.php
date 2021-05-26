<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1 (01-04-2021)</title>
</head>

<body>

    <?php
    // assignment for operators
    define('VAR1', 10);
    define('VAR2', 20);
    echo "<br>Arithmetic Operations";
    echo "<br>VAR1 = " . VAR1 . ", VAR2 = " . VAR2;
    echo "<br><b>Addition:- </b>VAR1 + VAR2 = " . (VAR1 + VAR2);
    echo "<br><b>Subtraction :- </b>VAR1 - VAR2 = " . (VAR1 - VAR2);
    echo "<br><b>Multiplication :- </b>VAR1 * VAR2 = " . (VAR1 * VAR2);
    echo "<br><b>Division :- </b>VAR1 / VAR2 = " . (VAR1 / VAR2);
    echo "<br><b>Modulas :- </b>VAR1 % VAR2 = " . (VAR1 % VAR2);
    echo "<br><b>Exponentiation :- </b>VAR1 ** VAR2 = " . (VAR1 ** 2);
    echo "<hr>";

    $var1 = 10;
    $var2 = 20;
    echo "<br>";

    echo "<br>Assignment Operators";
    echo "<br><b>\$var1 = $var1, \$var2 = $var2</b>";
    $var1 = 30;
    echo '<br>$var1 = 30 -> <b>' . $var1 . "</b>";
    $var1 += 30;
    echo '<br>$var1 += 30 -> <b>' . $var1 . "</b>";
    $var1 -= 30;
    echo '<br>$var1 -= 30 -> <b>' . $var1 . "</b>";
    $var1 *= 30;
    echo '<br>$var1 *= 30 -> <b>' . $var1 . "</b>";
    $var1 /= 30;
    echo '<br>$var1 /= 30 -> <b>' . $var1 . "</b>";
    $var1 %= 30;
    echo '<br>$var1 %= 30 -> <b>' . $var1 . "</b>";
    echo "<hr>";
    $var1 = 10;
    echo "<br>";
    echo "<br>PHP Comarison Operator";
    echo "<br><b>\$var1 = $var1, \$var2 = $var2</b>";
    echo "<br>Equal <b>$var1==$var2</b> -> ";
    var_dump($var1 == $var2);
    echo "<br>Identical <b>$var1===$var2</b> -> ";
    var_dump($var1 === $var2);
    echo "<br>Not equal <b>$var1!=$var2</b> -> ";
    var_dump($var1 != $var2);
    echo "<br>Not equal <b>$var1<>$var2</b> -> ";
    var_dump($var1 <> $var2);
    echo "<br>Not identical <b>$var1!==$var2</b> -> ";
    var_dump($var1 !== $var2);
    echo "<br>Greater than <b>$var1>$var2</b> -> ";

    var_dump($var1 > $var2);
    echo "<br>Less than <b>$var1<$var2</b> -> ";
    var_dump($var1 < $var2);
    echo "<br>Greater than or equal to <b>$var1>=$var2</b> -> ";
    var_dump($var1 >= $var2);
    echo "<br>Less than or equal to <b>$var1<=$var2</b> -> ";
    var_dump($var1 <= $var2);
    echo "<hr>";
    echo "<br>";
    echo "<br>Increment And Decrement Operators";
    echo "<br><b>\$var1 = $var1, \$var2 = $var2</b>";
    echo '<br>$var1++ -> ' . $var1++;
    echo '<br>$var1-- -> ' . $var1--;
    echo '<br>++$var1 -> ' . ++$var1;
    echo '<br>--$var1 -> ' . --$var1;
    echo "<hr>";

    echo "<br>";
    echo "<br>Logical Operators";
    echo "<br><b>\$var1 = $var1, \$var2 = $var2</b>";
    echo '<br>$var1 and $var2 -> ';
    var_dump($var1 and $var2);
    echo '<br>$var1 or $var2 -> ';
    var_dump($var1 or $var2);
    echo '<br>$var1 xor $var2 -> ';
    var_dump($var1 xor $var2);
    echo '<br>$var1 && $var2 -> ';
    var_dump($var1 && $var2);

    echo '<br>$var1 || $var2 -> ';
    var_dump($var1 || $var2);
    echo '<br>!($var1 and $var2) -> ';
    var_dump(!($var1 and $var2));
    echo "<hr>";
    echo "<br>";

    echo "<br>Ternary Operator (Conditional)";
    echo "<br><b>\$var1 = $var1, \$var2 = $var2</b>";
    $var3 = $var1 == $var2 ? $var1 : $var2;
    echo '<br>$var3 = $var1==$var2?$var1:$var2 ';
    echo "<br>\$var3 = $var3";
    echo "<hr>";
    echo "<br>";
    echo "<br>Varible Handeling";
    echo "<br>is_int(\$var1) ->";
    var_dump(is_int($var1));
    echo "<br>is_double(\$var1) ->";
    var_dump(is_double($var1));
    echo "<br>is_bool(\$var1) ->";
    var_dump(is_bool($var1));
    echo "<br>is_long(\$var1) ->";
    var_dump(is_long($var1));
    echo "<br>is_string(\$var1) ->";
    var_dump(is_string($var1));
    echo "<br>is_float(\$var1) ->";
    var_dump(is_float($var1));
    echo "<br>is_object(\$var1) ->";
    var_dump(is_object($var1))
    ?>
</body>

</html>