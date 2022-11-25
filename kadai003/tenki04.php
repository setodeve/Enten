<?php
$stmt = $pdo->prepare ( 'select * from tenki ' );
$stmt->execute();
$list = $stmt->fetchAll();
  echo $list;
?>
