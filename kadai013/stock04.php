<?php
require_once("forSmart.php");

$pdo = new PDO( 'mysql:host=localhost;dbname=kadaidb;charset=utf8', 'root', '' );
$stmt = $pdo->prepare( 'select * from stock ' );
$stmt->execute();
$list = $stmt->fetchAll();


$smart->assign('list',$list);
$smart->display('../templates/stock04.tpl');

?>
