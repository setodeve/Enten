<?php
$pdo = new PDO( 'mysql:host=localhost;dbname=kadaidb;charset=utf8', 'root', '' );
$stmt = $pdo->prepare( 'select * from tenki where id =' . $_GET["id"]);
$stmt->execute();
$user = $stmt->fetch();
echo $user["name"] ;
echo '<br>';
echo $user["post"] ;
echo '<br>';
echo $user["gender"] ;
echo '<br>';
echo $user["mark"] ;
