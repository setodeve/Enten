<?php
require_once("base.php");
class program05 extends Base{
  function execute(){
    require_once("forSmart.php");
    
    $stmt = $this->pdo->prepare( 'select * from program where id =' . $_GET["id"]);
    $stmt->execute();
    $user = $stmt->fetch();
    
    $smart->assign('name',$user["name"]);
    $smart->assign('post',$user["post"]);
    $smart->display('../templates/program/program05.tpl');
  }
}

$obj = new program05();
$obj->execute();

?>