<?php
define("REQUIRED_FIELD_ERROR", "This field is required");
$errors = [];

$username = "";
$email = "";
$password = "";
$password_confirm = "";
$cv_url = "";



if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $username = post_data("username");
  $email = post_data("email");
  $password = post_data("password");
  $password_confirm = post_data("password_confirm");
  $cv_url = post_data("cv_url");

  echo "<pre>";
  var_dump($username, $email, $password, $password_confirm, $cv_url);
  echo "</pre>";

  if (!$username) {
    $errors["username"] = REQUIRED_FIELD_ERROR;
  } elseif (strlen($username) < 6 || strlen($username) > 16) {
    $errors["username"] = "Username must be in between 6 and 16 characters";
  }

  if (!$email) {
    $errors["email"] = REQUIRED_FIELD_ERROR;
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors["email"] = "This field must be valid email address";
  }

  if (!$password) {
    $errors["password"] = REQUIRED_FIELD_ERROR;
  }

  if (!$password_confirm) {
    $errors["password_confirm"] = REQUIRED_FIELD_ERROR;
  }
  if ($password && $password_confirm && strcmp($password, $password_confirm) !== 0) {
    $errors["password_confirm"] = "This must match the password field";
  }
  if ($cv_url && !filter_var($cv_url, FILTER_VALIDATE_URL)) {
    $errors["cv_url"] = "Please provide a valid link";
  }
}

function post_data($field)
{
  $_POST[$field] ??= "";

  return htmlspecialchars(stripslashes($_POST[$field]));
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="padding: 50px">
  <form action="" method="post" novalidate>
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label>Username</label>
          <input class="form-control <?php echo isset($errors["username"]) ? "is-invalid" : "" ?>" name="username" value="<?php echo $username ?>">
          <small class="form-text text-muted">Min: 6 and max 16 characters</small>
          <div class="invalid-feedback">
            <?php echo $errors["username"] ?? "" ?>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="form-group ">
          <label>Email</label>
          <input type="email" class="form-control <?php echo isset($errors["email"]) ? "is-invalid" : "" ?>" name="email" value="<?php echo $email ?>">
          <div class="invalid-feedback">
            <?php echo $errors["email"] ?? "" ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control <?php echo isset($errors["password"]) ? "is-invalid" : "" ?>" name="password" value="<?php echo $password ?>">
          <div class="invalid-feedback">
            <?php echo $errors["password"] ?? "" ?>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label>Repeat Password</label>
          <input type="password" class="form-control <?php echo isset($errors["password_confirm"]) ? "is-invalid" : "" ?>" name="password_confirm" value="<?php echo $password_confirm ?>">
          <div class="invalid-feedback">
            <?php echo $errors["password_confirm"] ?? "" ?>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="form-group">
        <label>Your CV link</label>
        <input type="text" class="form-control <?php echo isset($errors["cv_url"]) ? "is-invalid" : "" ?>" name="cv_url" placeholder="https://www.example.com/my-cv" value="<?php echo $cv_url ?>" />
        <div class="invalid-feedback">
          <?php echo $errors["cv_url"] ?? "" ?>
        </div>
      </div>
    </div>

    <div class="form-group">
      <button class="btn btn-primary">Register</button>
    </div>
  </form>
</body>

</html>