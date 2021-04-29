<?php

$string = "This is sample String In Php";
echo "Original String = $string"."<br>";
echo "Length = ".strlen($string)."<br>";
echo "Words Count = ".str_word_count($string)."<br>";
echo "Reverse = ".strrev($string)."<br>";
echo "Replace = ".str_replace("sample","Hello",$string)."<br>";
echo "Split = "."<br>";
print_r(str_split($string,4));
echo "<br>";
echo "Sub string = ".substr($string,0,7)."<br>";
echo "Lower Case = ".strtolower($string)."<br>";
echo "Upper Case = ".strtoupper($string)."<br>";
echo "Comparison = ".strcmp($string,"This is sample String In Php")."<br>";
echo "Repeition = ".str_repeat("s",4)."<br>";
echo "Shuffle = ".str_shuffle($string)."<br>";
?>