
<?php
class program01{
  function execute(){
    require_once("forSmart.php");
    $smart->display('../templates/program/program01.tpl');
  }
}

$obj = new program01();
$obj->execute();

?>

