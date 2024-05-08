<?php
// Function which prints "Hello I am TheCodeholic"
function hello($name)
{
    echo "Hello i am " . $name . "<br>";
}
hello("The codeholic");
hello("Traversy Media");
hello("The Net Ninja");
// Create sum of two functions
function sum1($a, $b)
{
    return $a + $b;
}
$sum = sum1(4, 5);
echo $sum . "<br>";

// Create function to sum all numbers using ...$nums
function sum(...$numbers)
{
    $sum = 0;
    foreach ($numbers as $num)
        $sum += $num;
    return $sum;
}

$sum = sum(1, 2, 3, 4, 5);
echo $sum . "<br>";
// Arrow functions