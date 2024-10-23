<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = "Geeky shows";
    echo "<h2>Hello world</h2>";
    echo "<h2>Hello $a</h2>";
    echo "<input type='text' value='$a' />";
    echo "<h2 style='color:red;'>Hello geekyshows</h2>";
    echo "<script>console.log('Hello world');</script>";
    ?>
    <hr>
    <h1>PHP inside HTML</h1>
    <h3 style="color: blue;"><?php echo $a; ?></h3>
    <input type="text" value="<?php echo "geekyshows" ?>">
</body>

</html>