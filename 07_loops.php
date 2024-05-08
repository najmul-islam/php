<?php
// while
// while(true){

// }
// Loop with $counter
$counter = 0;
while ($counter < 10) {
    echo "Counter $counter" . "<br>";
    $counter++;
}
// do - while
$counter = 10;
do {
    echo "Counter $counter";
} while ($counter < 10);

// for
for ($i = 0; $i < 10; $i++) {
    echo "Counter: $i" . "<br>";
}
// foreach
$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $i => $fruit) {
    echo $i . " " . $fruit . "<br>";
}


// Iterate Over associative array.
$person = [
    "name" => "Brand",
    "surname" => "Traversy",
    "age" => 30,
    "hobbies" => ["Tennis", "Video Games"]
];

foreach ($person as $key => $value) {
    if ($key === "hobbies")
        break;
    echo $value . "<br>";
}