<?php

echo "1.С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка<br>";
$i = 0;
while ($i <= 100) {
    if ($i%3 == 0) {
        echo $i.' ';
    }
    $i++;
}
echo "<br><br>";

echo "2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так: <br>0 – это ноль.
1 – нечетное число.<br>
2 – четное число.<br>
3 – нечетное число.<br>
…<br>
10 – четное число.<br><br>";

$j = 0;
do {
    if ($j == 0) {
        echo "$j - это ноль.<br>";
    }elseif ($j%2 == 1) {
        echo "$j - нечетное число.<br>";
    }else {
        echo "$j - четное число.<br>";
    }
    $j++;
} while ( $j <= 10);
echo "<br><br>";

echo "3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:<br>
Московская область:<br>
Москва, Зеленоград, Клин<br>
Ленинградская область:<br>
Санкт-Петербург, Всеволожск, Павловск, Кронштадт<br>
Рязанская область … (названия городов можно найти на maps.yandex.ru)<br><br>";

$A = ["Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область"=>["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область"=>["Рязань","Касимов","Кораблино","Михайлино"],
];

function thirdtask($arr) {
    foreach ($arr as $key => $value) {
        echo "$key: <br>";
        foreach ($value as $key2 => $value2) {
            $gorod .= "$value2, ";
        }
        $gorod = rtrim($gorod, ', ');
        echo "$gorod<br>";
        $gorod = '';
    }
}
thirdtask($A);
echo "<br><br>";
echo $str4 = "4. ВАЖНОЕ1. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
<br>Написать функцию транслитерации строк.<br><br>";
$alfabet = [
    'а' => 'a',   'б' => 'b',   'в' => 'v',
    'г' => 'g',   'д' => 'd',   'е' => 'e',
    'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
    'и' => 'i',   'й' => 'y',   'к' => 'k',
    'л' => 'l',   'м' => 'm',   'н' => 'n',
    'о' => 'o',   'п' => 'p',   'р' => 'r',
    'с' => 's',   'т' => 't',   'у' => 'u',
    'ф' => 'f',   'х' => 'h',   'ц' => 'c',
    'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
    'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
    'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
];
foreach ($alfabet as $key3 => $value3) {
    $str4 = mb_ereg_replace($key3, $value3, $str4);
    $str4 = mb_ereg_replace(mb_convert_case($key3, MB_CASE_UPPER, "UTF-8"), mb_convert_case($value3, MB_CASE_UPPER, "UTF-8"), $str4);
}
echo '$str4<br><br>';

echo $str5 = '5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.<br>';
function five($str) {
    echo $str = mb_ereg_replace(' ', '_', $str);
}
five($str5);



