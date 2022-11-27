<?php
require '../kadai003/header.php'; 
echo rtnHeader();
?>
<p>
  <?php echo $_POST["name"] ;?>
</p>

<form action="stock03.php" method="post">
  <div>
      <input type="hidden" id="name" name="name" value="<?php echo $_POST["name"] ;?>">
      <input type="hidden" id="post" name="post" value="<?php echo $_POST["post"] ;?>">
      <input type="submit" value="確認">
  </div>
</form>

<?php
  require '../kadai003/footer.php'; 
  echo rtnFooter();
?>
