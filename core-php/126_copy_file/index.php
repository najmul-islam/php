<?php
copy("geek.txt", "show.txt");

if (copy("geek.txt", "shows1.txt")) {
    echo "file copied";
} else {
    echo "file not copied";
}