<?php
$pdo = new PDO( 'mysql:host=localhost;dbname=kadaidb;charset=utf8', 'root', '' );
$stmt = $pdo->prepare( 'select * from tenki ' );
$stmt->execute();
$list = $stmt->fetchAll();

for($i=0;$i<count($list);$i++){
  // echo $list[$i]["name"];
  echo '<br>';
  echo '<a href="tenki05.php">'. $list[$i]["name"].'</a>';
}
?>

