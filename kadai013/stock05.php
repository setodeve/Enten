<?php

require '../kadai003/header.php'; 
echo rtnHeader();

$pdo = new PDO( 'mysql:host=localhost;dbname=kadaidb;charset=utf8', 'root', '' );
$stmt = $pdo->prepare( 'select * from stock where id =' . $_GET["id"]);
$stmt->execute();
$user = $stmt->fetch();
echo $user["name"] ;
echo '<br>';
echo $user["post"] ;

require '../kadai003/footer.php'; 
echo rtnFooter();