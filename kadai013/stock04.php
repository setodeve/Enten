
<?php
class stock04{
  function execute(){
    require_once("forSmart.php");
    require_once("database.php");
    
    $stmt = $pdo->prepare( 'select * from stock ' );
    $stmt->execute();
    $list = $stmt->fetchAll();
    
    $smart->assign('list',$list);
    $smart->display('../templates/stock04.tpl');    
  }
}

$obj = new stock04();
$obj->execute();

?>