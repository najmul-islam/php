<?php
// Declare variables
$name = "Zura";
$age = 28;
$isMale = true;
$height = 1.84;
$salary = null;

echo "<h3>Print the variables. Explain what is concatenation</h3>";
echo $name . "<br>";
echo $age . "<br>";
echo $isMale . "<br>";
echo $height . "<br>";
echo $salary . "<br>";

echo "<h3>Print types of the variables</h3>";
echo gettype($name) . "<br>";
echo gettype($age) . "<br>";
echo gettype($isMale) . "<br>";
echo gettype($height) . "<br>";
echo gettype($salary) . "<br>";

echo "<h3>Print the whole variable</h3>";
var_dump($name) . "<br>";
var_dump($age) . "<br>";
var_dump($isMale) . "<br>";
var_dump($height) . "<br>";
var_dump($salary) . "<br>";

echo "<h3>Change the value of the variable</h3>";
$name = 28;

// echo gettype($name);

// echo "<h3>variable checking funtions</h3>";
// var_dump(is_string($name));

// constent
define("PI", 3.14);
echo PI . "<br>";

echo PHP_INT_MAX;