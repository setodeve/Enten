
<?php
require_once("base.php");
class stock03 extends Base{
  function execute(){
    require_once("forSmart.php");

    $smart->assign('name',$_POST["name"]);
    $smart->assign('post',$_POST["post"]);
    $smart->display('../templates/stock03.tpl');
    
    $data = [
      'name' => $_POST["name"],
      'post' => $_POST["post"],
    ];
    
    $stmt = $this->pdo->prepare ( 'insert into stock (name,post) values(:name, :post)' );
    $stmt->execute($data);
  }
}

$obj = new stock03();
$obj->execute();

?>
