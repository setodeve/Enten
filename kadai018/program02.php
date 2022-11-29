
<?php
class program02{
  function execute(){
    require_once("forSmart.php");
    $smart->assign('name',$_POST["name"]);
    $smart->assign('post',$_POST["post"]);
    $smart->display('../templates/program/program02.tpl');
  }
}

$obj = new program02();
$obj->execute();

?>
