<?php
require ("/Applications/XAMPP/xamppfiles/lib/php/smarty-4.3.0/libs/Smarty.class.php");

$smart = new Smarty();
$smart->template_dir = '/Applications/XAMPP/xamppfiles/htdocs/Enten/templates';
$smart->config_dir = ' /Applications/XAMPP/xamppfiles/htdocs/Enten/config';
$smart->cache_dir = '/Applications/XAMPP/xamppfiles/htdocs/Enten/cache';
$smart->compile_dir = '/Applications/XAMPP/xamppfiles/htdocs/Enten/templates_c';
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
