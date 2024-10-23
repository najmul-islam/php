<?php
$data = file_get_contents("geek.txt");
$replace_data = str_replace("\n", "<br/>", $data);
echo $replace_data;