
<?php
require_once("base.php");
class program04 extends Base{
  function execute(){
    require_once("forSmart.php");
    
    $stmt = $this->pdo->prepare( 'select * from program ' );
    $stmt->execute();
    $list = $stmt->fetchAll();
    
    $smart->assign('list',$list);
    $smart->display('../templates/program/program04.tpl');    
  }
}

$obj = new program04();
$obj->execute();

?>