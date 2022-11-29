<!DOCTYPE html>
<html>
<head>
{include file='title.tpl' title='プログラミングについての話題'}
</head>
 {include file='header.tpl'}


<body>
  <form action="program02.php" method="post">
      <label for="name">名前:</label>
      <input type="text" id="name" name="name"><br><br>
      <label for="post">投稿内容:</label>
      <input type="text" id="post" name="post"><br><br>
      <input type="submit" value="送信">

  </form>

</body>

 {include file='footer.tpl'}
</html>