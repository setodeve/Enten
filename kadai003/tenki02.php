
<p>
  <?php echo $_POST["name"] ;?>
</p>
<form action="tenki03.php" method="post">
  <div>
      <input type="hidden" id="name" name="name" value="<?php echo $_POST["name"] ;?>">
      <input type="submit" value="確認">
  </div>
</form>
<?php

  function getRequest(){
    if(!empty($_GET)){
      error_log($_GET["name"], 0);
      error_log($_GET["post"], 0);
      error_log($_GET["gender"], 0);
      error_log($_GET["mark"], 0);
      error_log("Got", 0);
    }elseif(!empty($_POST)){
      error_log($_POST["name"], 0);
      error_log($_POST["post"], 0);
      error_log($_POST["gender"], 0);
      error_log($_POST["mark"], 0);
      error_log("Posted", 0);
    }else{
      echo "empty";
    }
    return 0;
  }

  getRequest();
?>
