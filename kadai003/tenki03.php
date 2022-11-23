<?php
  echo  $_POST["name"];
  error_log($_POST["name"], 0);
  $pdo = new PDO( 'mysql:host=localhost;dbname=kadaidb;charset=utf8', 'root', '' );
?>
