
<?php
require_once("base.php");
class stock04 extends Base{
  function execute(){
    require_once("forSmart.php");
    
    $stmt = $this->pdo->prepare( 'select * from stock ' );
    $stmt->execute();
    $list = $stmt->fetchAll();
    
    $smart->assign('list',$list);
    $smart->display('../templates/stock04.tpl');    
  }
}

$obj = new stock04();
$obj->execute();

?>