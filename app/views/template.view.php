<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Template</title>
</head>

<body>
  <a href="<?= BASE_PATH ?>/dashboard"></a>
  <a href="<?= BASE_PATH ?>/pegawai"></a>
  <h2>----------------------------</h2>
  <?php

  $view = new View($viewName);
  $view->bind("data", $data);
  $view->render();

  ?>
  <h2>----------------------------</h2>
</body>

</html>