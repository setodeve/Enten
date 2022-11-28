<?php
require ("/Applications/XAMPP/xamppfiles/lib/php/smarty-4.3.0/libs/Smarty.class.php");

$pdo = new PDO( 'mysql:host=localhost;dbname=kadaidb;charset=utf8', 'root', '' );
$stmt = $pdo->prepare( 'select * from stock ' );
$stmt->execute();
$list = $stmt->fetchAll();

$smart = new Smarty();
$smart->template_dir = '/Applications/XAMPP/xamppfiles/htdocs/Enten/templates';
$smart->config_dir = ' /Applications/XAMPP/xamppfiles/htdocs/Enten/config';
$smart->cache_dir = '/Applications/XAMPP/xamppfiles/htdocs/Enten/cache';
$smart->compile_dir = '/Applications/XAMPP/xamppfiles/htdocs/Enten/templates_c';
$smart->assign('list',$list);
$smart->display('../templates/stock04.tpl');

?>
