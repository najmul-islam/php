<?php

$age = 20;
$salary = 300000;

// if condition
echo "<h3>if condition</h3>";
if ($age > 25) {
    echo "You are not young" . "<br>";
}

if ($age < 25) {
    echo "You are young" . "<br>";
}

// if condition - else
echo "<h3>if condition - else</h3>";
if ($age > 25) {
    echo "You are not young" . "<br>";
} else {
    echo "You are young" . "<br>";
}

// if condition1 AND condition2
if ($age < 22 && $salary < 500000) {
    echo "You are young and not rich" . "<br>";
}
// if condition1 OR condition2
if ($age < 22 || $salary > 5000000) {
    echo "You are young or you are rich" . "<br>";
}
// if condition1 - elseif condition2 - else
if ($age < 22) {
    echo "Young" . "<br>";
} elseif ($age < 30) {
    echo "You are not young but not old" . "<br>";
} elseif ($age < 60) {
    echo "You are old but not too old" . "<br>";
} else {
    echo "You are too old" . "<br>";
}

// if condition1 and condition2 - elseif condition1 and condition2 - else
if ($age < 22 && $salary >= 500000) {
    echo "You are young man AND rich!!" . "<br>";
} elseif ($age < 22 && $salary < 500000) {
    echo "You are young, and not so rich" . "<br>";
} elseif ($age < 60 && $salary >= 500000) {
    echo "You are old, but rich" . "<br>";
} elseif ($age > 60 && $salary < 500000) {
    echo "You are old and NOT rich also" . "<br>";
} else {
    echo "You are in last stage";
}
// Ternary if
echo $age < 22 ? "Young" : "Not young";

// Null coalescing operator
$myAge = $age ? $age : 18;
echo $myAge;
// Null coalescing assignment operator. Since PHP 7.4
$person = [
    "name" => "John"
];
if (!isset($person["name"])) {
    $person["name"] = "Anonumous";
}

$person["name"] ??= "Anonymous";
echo $person["name"] . "<br>";

// switch
$userRole = "editor";
switch ($userRole) {
    case "admin":
        echo "You are admin";
        break;
    case "editor":
        echo "You can edit articles";
        break;
    default:
        echo "Unknown role";
}