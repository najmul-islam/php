<?php
$handle = fopen("geek.txt", "a");
if (fwrite($handle, " World") == FALSE) {
    echo "Could not write";
} else {
    echo "Success";
}

fclose($handle);