<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<p>
 <?
   $menu = [
       "/" => "Главная",
       "?page=catalog" => "Каталог"
    ]
 ?>
<ul>
    <? foreach ($menu as $page => $pageName): ?>
    <li><a href="<?=$page?>"><?=$pageName?></a> </li>
    <?endforeach;?>
</ul>
</p>
<?=$content?>
</body>
</html>