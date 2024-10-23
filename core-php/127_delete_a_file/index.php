<?php

if (unlink("geek.txt")) {
    echo "file deleted";
} else {
    echo "not delete";
}