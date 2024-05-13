<?php

setcookie("name", "Zura", time() + 60, "/");

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";