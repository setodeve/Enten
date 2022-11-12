<!DOCTYPE html>
<html>
<head>
<title>Title</title>
</head>
<body>
  <form action="tenki02.php" method="post">
      <label for="name">名前:</label>
      <input type="text" id="name" name="name"><br><br>
      <label for="post">投稿内容:</label>
      <input type="text" id="post" name="post"><br><br>
      <fieldset>
        性別:
        <label for="male">男:</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="female">女:</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="NoAnswer">無回答:</label>
        <input type="radio" id="NoAnswer" name="gender" value="NoAnswer"><br><br>
      </fieldset>
      <label for="mark">目立つマーク:</label>
      <input type="checkbox" id="mark" name="mark"><br><br>
      <input type="submit" value="送信">

  </form>

</body>
</html>