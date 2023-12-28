<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <?php
  if (isset($msg)) {
    echo "" . $msg . "";
  }

  ?>

  <form action="<?= BASE_PATH  ?>/login/check" method="post">
    <input type="text" name="username" placeholder="username">
    <input type="text" name="password" placeholder="password">
    <button type="submit" name="login">Login</button>
  </form>
</body>

</html>