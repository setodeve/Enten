
<?php
class stock02{
  function execute(){
    require_once("forSmart.php");
    $smart->assign('name',$_POST["name"]);
    $smart->assign('post',$_POST["post"]);
    $smart->display('../templates/stock02.tpl');
  }
}

$obj = new stock02();
$obj->execute();

?>
