<!DOCTYPE html>
<html>
<head>
{include file='title.tpl' title='プログラミングについての話題'}
</head>
 {include file='header.tpl'}

<body>

  {foreach from=$list item=item}
    <a href="program05.php?id={$item["id"]}"> {$item["name"]}</a>
    <br>
  {/foreach}

</body>

 {include file='footer.tpl'}
</html>