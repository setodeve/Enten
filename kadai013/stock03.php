<?php
require_once("forSmart.php");
$smart->assign('name',$_POST["name"]);
$smart->assign('post',$_POST["post"]);
$smart->display('../templates/stock03.tpl');

$data = [
  'name' => $_POST["name"],
  'post' => $_POST["post"],
];

$pdo = new PDO( 'mysql:host=localhost;dbname=kadaidb;charset=utf8', 'root', '' );
$stmt = $pdo->prepare ( 'insert into stock (name,post) values(:name, :post)' );
$stmt->execute($data);

?>
