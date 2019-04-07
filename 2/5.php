<?php
//ВАЖНОЕ! Написать функцию renderTemplate возвращающую шаблон в виде текста,
// вынесите весь повторяющийся код из шаблона страниц (doctype, menu, header, footer) в отдельный шаблон (layout),
// сделайте отдельный шаблон страницы с приветствием.
// Обеспечьте формирование результирующей страницы используя только функцию renderTemplate,
// т.е. в layout должен вставиться подшаблончик страницы с приветствием.

$layout = file_get_contents("layout.tmpl");
$hello = file_get_contents("hello.tmpl");


function renderTemplate($layout,$hello){
    $layout = str_replace("{{HELLO}}",$hello, $layout);
    echo $layout;
}

renderTemplate($layout,$hello);