<?php
require 'header.php'; 
echo rtnHeader();

$data = [
    'name' => $_POST["name"],
    'post' => $_POST["post"],
    'gender' => $_POST["gender"],
    'mark' => $_POST["mark"]    
  ];
  echo  $_POST["name"];
  error_log($_POST["name"], 0);
  $pdo = new PDO( 'mysql:host=localhost;dbname=kadaidb;charset=utf8', 'root', '' );
  $stmt = $pdo->prepare ( 'insert into tenki (name,post,gender,mark) values(:name, :post,:gender,:mark)' );
  $stmt->execute($data);


  require 'footer.php'; 
  echo rtnFooter();
  