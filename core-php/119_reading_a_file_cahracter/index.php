<?php

$handle = fopen("geek.txt", "r");
while ($char = fgetc($handle)) {
    if ($char === "\n") {
        $char = "<br/>";
    }
    echo $char;
}

fclose($handle);