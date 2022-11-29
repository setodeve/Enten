
<?php
require_once("base.php");
class program03 extends Base{
  function execute(){
    require_once("forSmart.php");

    $smart->assign('name',$_POST["name"]);
    $smart->assign('post',$_POST["post"]);
    $smart->display('../templates/program/program03.tpl');
    
    $data = [
      'name' => $_POST["name"],
      'post' => $_POST["post"],
    ];
    
    $stmt = $this->pdo->prepare ( 'insert into program (name,post) values(:name, :post)' );
    $stmt->execute($data);
  }
}

$obj = new program03();
$obj->execute();

?>
