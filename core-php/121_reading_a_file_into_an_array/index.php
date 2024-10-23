<?php
$data = file("geek.txt");

foreach ($data as $line) {
    echo "$line <br/>";
}