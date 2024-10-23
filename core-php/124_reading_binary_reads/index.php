<?php
$handle = fopen("geek.txt", "rb");
$data = fread($handle, filesize("geek.txt"));

echo $data;

fclose($handle);