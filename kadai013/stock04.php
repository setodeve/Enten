<?php

require '../kadai003/header.php'; 
echo rtnHeader();

$pdo = new PDO( 'mysql:host=localhost;dbname=kadaidb;charset=utf8', 'root', '' );
$stmt = $pdo->prepare( 'select * from stock ' );
$stmt->execute();
$list = $stmt->fetchAll();

for($i=0;$i<count($list);$i++){
  echo '<a href="stock05.php?id='.$list[$i]["id"].'">'. $list[$i]["name"].'</a>';
  echo '<br>';
}

require '../kadai003/footer.php'; 
echo rtnFooter();
?>

