<!DOCTYPE html>
<html>
<head>
{include file='title.tpl' title='プログラミングについての話題'}
</head>
 {include file='header.tpl'}


<body>
<p>{$name}</p>
<p>{$post}</p>
<form action="program03.php" method="post">
  <div>
      <input type="hidden" id="name" name="name" value={$name}>
      <input type="hidden" id="post" name="post" value={$post}>
      <input type="submit" value="確認">
  </div>
</form>

</body>

 {include file='footer.tpl'}
</html>