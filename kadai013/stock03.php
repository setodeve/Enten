
<?php
class stock03{
  function execute(){
    require_once("forSmart.php");
    require_once("database.php");
    $smart->assign('name',$_POST["name"]);
    $smart->assign('post',$_POST["post"]);
    $smart->display('../templates/stock03.tpl');
    
    $data = [
      'name' => $_POST["name"],
      'post' => $_POST["post"],
    ];
    
    $stmt = $pdo->prepare ( 'insert into stock (name,post) values(:name, :post)' );
    $stmt->execute($data);
  }
}

$obj = new stock03();
$obj->execute();

?>
