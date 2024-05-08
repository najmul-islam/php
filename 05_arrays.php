<?php
$hr = "<hr>";
// Create array
// $fruits = array("Banana", "Apple", "Orange");
$fruits = ["Banana", "Apple", "Orange"];
echo "<h3>Print the whole array</h3>";
echo "<pre>";
var_dump($fruits);
echo "</pre>";
echo $hr;

echo "<h3>Get element by index</h3>";
echo $fruits[0] . "<br>";
echo $hr;

echo "<h3>Set element by index</h3>";
$fruits[0] = "Peach";

echo "<pre>";
var_dump($fruits);
echo "</pre>";
echo $hr;

echo "<h3>Check if array has element at index 2</h3>";
echo "<pre>";
var_dump(isset($fruits[2]));
echo "</pre>";
echo $hr;

echo "<h3>Append element</h3>";
$fruits[] = "Mango";
echo "<pre>";
var_dump($fruits);
echo "</pre>";
echo $hr;

echo "<h3>Print the length of the array</h3>";
echo count($fruits) . "<br>";
echo $hr;

echo "<h3>Add element at the end of the array</h3>";
array_push($fruits, "Papaya");

echo "<pre>";
var_dump($fruits);
echo "</pre>";
echo $hr;

echo "<h3>Remove element from the end of the array</h3>";
array_pop($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";
echo $hr;

echo "<h3>Add element at the beginning of the array</h3>";
array_unshift($fruits, "Apple");
echo "<pre>";
var_dump($fruits);
echo "</pre>";
echo $hr;

// Remove element from the beginning of the array
array_unshift($fruits);

// Split the string into an array
$string = "Banana, Apple, Peach";
echo "<pre>";
var_dump(explode(",", $string));
echo "</pre>";
echo $hr;

// Combine array elements into string
echo implode(", ", $fruits);
// Check if element exist in the array
in_array("Apple", $fruits) . "<br>";
// Search element index in the array
echo "<pre>";
var_dump($fruits);
echo "</pre>";
echo array_search("Apple", $fruits);

// Merge two arrays
$vegetables = ["Potato", "Cucumber"];
echo "<pre>";
var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]);
echo "</pre>";
echo $hr;

// Sorting of array (Reverse order also)
sort($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";
echo $hr;

// Filter, map, reduce of array
$number = [1, 2, 3, 4, 5, 6, 7, 8];
// $evens = array_filter($number, function ($n) {
//     return $n % 2 === 0;
// });
$evens = array_filter($number, fn($n) => $n % 2 === 0);

echo "<pre>";
var_dump($evens);
echo "</pre>";

$squares = array_map(fn($n) => $n * $n, $number);

echo "<pre>";
var_dump($squares);
echo "</pre>";

echo array_reduce($number, fn($carry, $item)=> $carry + $item);

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    "name" => "Brand",
    "surname"=> "Traversy",
    "age" => 30,
    "hobbies"=> [ "Tennis", "Video Games"]
];
// Get element by key
echo $person["name"] . "<br>";
echo $person["age"] . "<br>";
// Set element by key
$person["channel"] = "Traversy Media";
// Check if array has specific key
isset($person["age"]);
isset($person["address"]);

// Print the keys of the array
echo "<pre>";
var_dump(array_keys($person));
echo "</pre>";

// Print the values of the array
echo "<pre>";
var_dump(array_values($person));
echo "</pre>";

// Sorting associative arrays by values, by keys
asort($person);
echo "<pre>";
var_dump($person);
echo "</pre>";

// Two dimensional arrays
$todoItems = [
    ["title" => "item 1", "completed" => true],
    ["title" => "item 2", "completed" => false],
    ["title" => "item 3", "completed" => true],
];

echo "<pre>";
var_dump($todoItems);
echo "</pre>";