<!DOCTYPE html>
<html>
<head>
<title>株価についての話題</title>
</head>
 {include file='header.tpl'}


<body>
<p>{$name}</p>
<p>{$post}</p>
<form action="stock03.php" method="post">
  <div>
      <input type="hidden" id="name" name="name" value={$name}>
      <input type="hidden" id="post" name="post" value={$post}>
      <input type="submit" value="確認">
  </div>
</form>

</body>

 {include file='footer.tpl'}
</html>