<?php

require ("/Applications/XAMPP/xamppfiles/lib/php/smarty-4.3.0/libs/Smarty.class.php");
$pdo = new PDO( 'mysql:host=localhost;dbname=kadaidb;charset=utf8', 'root', '' );
$stmt = $pdo->prepare( 'select * from stock where id =' . $_GET["id"]);
$stmt->execute();
$user = $stmt->fetch();

$smart = new Smarty();
$smart->template_dir = '/Applications/XAMPP/xamppfiles/htdocs/Enten/templates';
$smart->config_dir = ' /Applications/XAMPP/xamppfiles/htdocs/Enten/config';
$smart->cache_dir = '/Applications/XAMPP/xamppfiles/htdocs/Enten/cache';
$smart->compile_dir = '/Applications/XAMPP/xamppfiles/htdocs/Enten/templates_c';
$smart->assign('name',$user["name"]);
$smart->assign('post',$user["post"]);
$smart->display('../templates/stock05.tpl');
?>