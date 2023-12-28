<h2>Selemaat datang</h2>
<a href="<?= BASE_PATH ?>/dashboard">dashboard</a>
<?php
foreach ($data as $d) {
  echo "<br>" . $d["nama_lengkap"] . "<br>";
}

?>