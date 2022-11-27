<!DOCTYPE html>
<html>
<head>
<title>株価についての話題</title>
</head>
<?php
require '../kadai003/header.php'; 
echo rtnHeader();
?>
<body>
  <form action="tenki02.php" method="post">
      <label for="name">名前:</label>
      <input type="text" id="name" name="name"><br><br>
      <label for="post">投稿内容:</label>
      <input type="text" id="post" name="post"><br><br>
      <input type="submit" value="送信">

  </form>

</body>
<?php
require '../kadai003/footer.php'; 
echo rtnFooter();
?>
</html>