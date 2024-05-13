<?php
// Magic constants
echo __DIR__ . "<br>";
echo __FILE__ . "<br>";

// Create directory
mkdir("test");

// Rename directory
rename("test", "my_folder");

// Delete directory
rmdir("my_folder");

// Read files and folders inside directory
$files = scandir("./");
echo "<pre>";
var_dump($files);
echo "</pre>";

// file_get_contents, file_put_contents
echo file_get_contents("lorem.txt");

echo file_put_contents("test.txt", "Hello world");
// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file