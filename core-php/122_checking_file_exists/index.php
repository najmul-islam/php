<?php
$filename = "geek.txt";

if (file_exists($filename)) {
    echo "$filename file is there";
} else {
    echo "file not found";
}