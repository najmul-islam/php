<?php 

// declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// arithmetic operations
echo $a + $b . "<br>";
echo $a - $b . "<br>";
echo $a * $b . "<br>";
echo $a / $b . "<br>";
echo $a % $b . "<br>";

// conversion
$strNumber = "12.34";
$number = (float) $strNumber;
$number2 = floatval($strNumber);
echo $strNumber ."<br>";

// number function
echo "abs(-15)" . abs(-15) . "<br>";
echo "pow(2, 3)" . pow(2, 3) . "<br>";
echo "sqrt(16)" . sqrt(16) . "<br>";
echo "max(2,3)" . max(2, 3) . "<br>";
echo "min(2,3)" . min(2, 3) . "<br>";
echo "round(2.4)" . round(2.4) . "<br>";
echo "round(2.6)" . round(2.6) . "<br>";
echo "floor(2.6)" . floor(2.6) . "<br>";
echo "ceil(2.4)" . ceil(2.4) . "<br>"; 

// formatting numbers
$number = 123456.342234;
echo number_format($number, 3, ".", " ") . "<br>";