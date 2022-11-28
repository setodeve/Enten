<?php

require_once("forSmart.php");

$pdo = new PDO( 'mysql:host=localhost;dbname=kadaidb;charset=utf8', 'root', '' );
$stmt = $pdo->prepare( 'select * from stock where id =' . $_GET["id"]);
$stmt->execute();
$user = $stmt->fetch();

$smart->assign('name',$user["name"]);
$smart->assign('post',$user["post"]);
$smart->display('../templates/stock05.tpl');
?>