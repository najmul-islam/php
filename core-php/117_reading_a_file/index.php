<?php

$handle = fopen("geek.txt", "r");
echo fgets($handle);

while (!feof($handle)) {
    $data = fgets($handle);
    echo "$data <br/>";
}