<?php
$errorMessage = "";
$file = $_FILES["file"];
$ext = pathinfo($file["name"], PATHINFO_EXTENSION);
$ext = strtolower($ext);

if ($file["size"] > 5 * 1024 * 1024) {
  $errorMessage = "You can not upload more than 5MB files";
} elseif (!in_array($ext, ["png", "jpeg", "svg", "jpg"])) {
  $errorMessage = "You can only upload images";
} else {
  move_uploaded_file($_FILES["file"]["tmp_name"], $_FILES["file"]["name"]);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
</head>

<body>
  <p><?php echo $errorMessage ?></p>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file"><br>
    <button type="submit">submit</button>
  </form>
</body>

</html>