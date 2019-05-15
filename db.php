<?php
session_start();

$conn = mysqli_connect(
  'mysql_db',
  'root',
  '.teamalpha.',
  'teamalpha_db'
) or die(mysqli_erro($mysqli));

?>
