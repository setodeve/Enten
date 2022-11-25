<?php
$pdo = new PDO( 'mysql:host=localhost;dbname=kadaidb;charset=utf8', 'root', '' );
$stmt = $pdo->prepare( 'select * from tenki ' );
$stmt->execute();
$list = $stmt->fetchAll();

for($i=0;$i<count($list);$i++){
  echo '<a href="tenki05.php?id='.$list[$i]["id"].'">'. $list[$i]["name"].'</a>';
  echo '<br>';
}
?>

