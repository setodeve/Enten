
<?php
class stock01{
  function execute(){
    require_once("forSmart.php");
    $smart->display('../templates/stock01.tpl');
  }
}

$obj = new stock01();
$obj->execute();

?>

