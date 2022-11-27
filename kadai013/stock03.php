<?php
require '../kadai003/header.php'; 
echo rtnHeader();

$data = [
    'name' => $_POST["name"],
    'post' => $_POST["post"],
  ];
  echo  $_POST["name"];
  error_log($_POST["name"], 0);
  $pdo = new PDO( 'mysql:host=localhost;dbname=kadaidb;charset=utf8', 'root', '' );
  $stmt = $pdo->prepare ( 'insert into stock (name,post) values(:name, :post)' );
  $stmt->execute($data);


  require '../kadai003/footer.php'; 
  echo rtnFooter();
  