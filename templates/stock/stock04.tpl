<!DOCTYPE html>
<html>
<head>
{include file='title.tpl' title='株価についての話題'}
</head>
 {include file='header.tpl'}


<body>

  {foreach from=$list item=item}
    <a href="stock05.php?id={$item["id"]}"> {$item["name"]}</a>
    <br>
  {/foreach}

</body>

 {include file='footer.tpl'}
</html>