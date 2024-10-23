<?php

$handle = fopen("geek.txt", "w") or die("Not found");
if ($handle) {
    echo "File opened <br/>";
} else {
    echo "Not found";
}

echo "Rest of the code";