<?php
// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";

$keyword = "";

if (isset($_GET["search"])) {
    $keyword = $_GET["search"];
    // echo $keyword . "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php ?>" method="get">
        <input type="text" name="search" value="<?php echo $keyword ?>" placeholder="Type and hit enter">
        <button>Search</button>
    </form>
</body>

</html>