<?php
    $titleText = 'Главная страница - страница обо мне';
    $hOneText = 'Информация обо мне';
    $year = 2019;
    $content = file_get_contents("site.tmpl");
    $content = str_replace("{{titleText}}",$titleText, $content);
    $content = str_replace("{{hOneText}}",$hOneText, $content);
    $content = str_replace("{{year}}",$year, $content);

echo $content;