<?php
require_once("base.php");
class stock05 extends Base{
  function execute(){
    require_once("forSmart.php");
    
    $stmt = $this->pdo->prepare( 'select * from stock where id =' . $_GET["id"]);
    $stmt->execute();
    $user = $stmt->fetch();
    
    $smart->assign('name',$user["name"]);
    $smart->assign('post',$user["post"]);
    $smart->display('../templates/stock05.tpl');
  }
}

$obj = new stock05();
$obj->execute();

?>