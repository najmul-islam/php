<?php
$todos = [];
if (file_exists("todos.json")) {
  $json = file_get_contents("todos.json");
  $todos = json_decode($json, true);
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

  <form action="newtodo.php" method="post">
    <input type="text" name="todo_name" placeholder="Enter your todo">
    <button type="submit">New Todo</button>
  </form>
  <hr>

  <?php foreach ($todos as $todoName => $todo) : ?>
  <div style="margin-bottom: 10px; margin-top:10px;">

    <form action="change_status.php" method="post" style="display:inline">
      <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
      <input type="checkbox" name="status" value="1" <?php echo ($todo["completed"] ? "checked" : "") ?>>
    </form>

    <?php echo $todoName ?>

    <form action="delete.php" method="post" style="display:inline-block">
      <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
      <button>Delete</button>
    </form>

  </div>
  <?php endforeach; ?>


  <script>
  const checkboxes = document.querySelectorAll("input[type=checkbox]")
  checkboxes.forEach(ch => {
    ch.onclick = function() {
      this.parentNode.sumbmit()
    }
  })
  </script>

</body>

</html>