<?php 
$hr = "<hr>";

// create simple string
$name = "TheCodeholic";
$hello = "Hello $name";
$hello2 = 'Hello $name';

echo "<h3>Create simple string</h3>";
echo $hello . "<br>";
echo $hello2 . "<br>";
echo $hr;

echo "<h3>String concatenation</h3>";
echo "Hello " . "World" . " and PHP" . "<br>";
echo $hr;
// string functions
$string = "      Hello world    ";

echo "<h3>String functions</h3>";
echo "1 - " . strlen($string) . "<br>" . PHP_EOL;
echo "2 - " . trim($string) . "<br>" . PHP_EOL;
echo "3 - " . ltrim($string) . "<br>" . PHP_EOL;
echo "4 - " . rtrim($string) . "<br>" . PHP_EOL;
echo "5 - " . ltrim($string) . "<br>" . PHP_EOL;
echo "6 - " . str_word_count($string) . "<br>" . PHP_EOL;
echo "7 - " . strrev($string) . "<br>" . PHP_EOL;
echo "8 - " . strtoupper($string) . "<br>" . PHP_EOL;
echo "9 - " . ucfirst("hello") . "<br>" . PHP_EOL;
echo "10 - " . lcfirst("HELLO") . "<br>" . PHP_EOL;
echo "11 - " . ucwords("hello world") . "<br>" . PHP_EOL;
echo "12 - " . strpos($string, 'world') . "<br>" . PHP_EOL;
echo "13 - " . stripos($string, "world") . "<br>" . PHP_EOL;
echo "14 - " . substr($string, 8) . "<br>" . PHP_EOL;
echo "15 - " . str_replace("World", "PHP", $string) . "<br>" . PHP_EOL;
echo "16 - " . str_ireplace("world", "PHP", $string) . "<br>" . PHP_EOL;
echo $hr;

$number1 = 100;
$number2 = 12345;

echo str_pad($number1, 8, "0", STR_PAD_LEFT) . "<br>";

echo "<H3>Multiline text and line breaks</H3>";
$longText1 = "
    Hello, 
    my name is Zura. 
    I am 27, 
    I love my dughter
";
echo  $longText111 . "<br>";
echo nl2br($longText1) . "<br>";
echo $hr;

echo "<h3>Multiline text and reserve html tags</h3>";

$longText2 = "
    Hello, 
    my name is <b>Zura</b>. 
    I am <b>27</b>, 
    I love my <b>dughter</b>
";

echo "1 - " . $longText2 . "<br>";
echo "2 - " . nl2br($longText2) . "<br>";
echo "3 - " . htmlentities($longText2) . "<br>";
echo "4 - " . nl2br(htmlentities($longText2)) . "<br>";
echo "5 - " . html_entity_decode(htmlentities($longText2)) . "<br>" . PHP_EOL;
echo "6 - " . htmlspecialchars($longText2) . "<br>" . PHP_EOL;
echo $hr;

echo "<a href='https://www.php.net/manual/en/ref.strings.php'>String Functions</a>";