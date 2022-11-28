

<?php
require ("/Applications/XAMPP/xamppfiles/lib/php/smarty-4.3.0/libs/Smarty.class.php");

$smart = new Smarty();
$smart->template_dir = '/Applications/XAMPP/xamppfiles/htdocs/Enten/templates';
$smart->config_dir = ' /Applications/XAMPP/xamppfiles/htdocs/Enten/config';
$smart->cache_dir = '/Applications/XAMPP/xamppfiles/htdocs/Enten/cache';
$smart->compile_dir = '/Applications/XAMPP/xamppfiles/htdocs/Enten/templates_c';
$smart->assign('name',$_POST["name"]);
$smart->assign('post',$_POST["post"]);
$smart->display('../templates/stock02.tpl');

?>

