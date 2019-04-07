<?php

echo "1. если a и b положительные, вывести их разность;<br>если а и b отрицательные, вывести их произведение;<br>если а и b разных знаков, вывести их сумму;<br>";

$a = random_int(-100 , 100);
$b = random_int(-100 , 100);

echo "a = " . $a . " b = " . $b . "<br> Вывод:";

if	($a	>= 0 && $b >= 0){
    echo $a-$b;
}
elseif ($a < 0 && $b < 0){
    echo $a*$b;
}
else {
    echo $a+$b . "<br>";
}

echo "2. Присвоить переменной c значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от c до 15.<br>";

$c = random_int(0 , 15);

echo $c . "<br><br>";

switch($c) {
    case 1:
        echo $c++ . "<br>";
    case 2:
        echo $c++ . "<br>";
    case 3:
        echo $c++ . "<br>";
    case 4:
        echo $c++ . "<br>";
    case 5:
        echo $c++ . "<br>";
    case 6:
        echo $c++ . "<br>";
    case 7:
        echo $c++ . "<br>";
    case 8:
        echo $c++ . "<br>";
    case 9:
        echo $c++ . "<br>";
    case 10:
        echo $c++ . "<br>";
    case 11:
        echo $c++ . "<br>";
    case 12:
        echo $c++ . "<br>";
    case 13:
        echo $c++ . "<br>";
    case 14:
        echo $c++ . "<br>";
    case 15:
        echo $c++ . "<br>";
        break;
};

echo "3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return. В делении на 0 сделайте проверку и вывод сообщения об ошибке. <br>";

function summa ($d,$e){
    return $d+$e;
};
function raznost ($d,$e){
    return $d-$e;
};
function umnozhenie ($d,$e){
    return $d*$e;
};
function deleniye ($d,$e){
    if ($e != 0) {
        return $d/$e;
    }
    else {
        return "Делить на 0 нельзя!";
    }
};

$f = random_int(-100 , 100);
$g = random_int(-100 , 100);

echo 'f = ' . $f . " g = " . $g . "<br>";

echo "Сумма:" . summa($f,$g) . "<br>";
echo "Разность:" . raznost($f,$g) . "<br>";
echo "Умножение:" . umnozhenie($f,$g) . "<br>";
echo "Деление:" . deleniye($f,$g) . "<br>";

echo "4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.<br>
В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).<br>";

function mathOperation($arg1, $arg2, $operation) {
    switch($operation){
        case "сумма":
            return "Сумма:" . summa($arg1,$arg2) . "<br>";
            break;
        case "разность":
            return "Разность:" . raznost($arg1,$arg2) . "<br>";
            break;
        case "умножение":
            return "Умножение:" . umnozhenie($arg1,$arg2) . "<br>";
            break;
        case "деление":
            return "Деление:" . deleniye($arg1,$arg2) . "<br>";
            break;
    }
};

$h = random_int(-100 , 100);
$i = random_int(-100 , 100);

echo 'h = ' . $h . " i = " . $i . "<br>";

echo mathOperation($h,$i,'сумма');
echo mathOperation($h,$i,'разность');
echo mathOperation($h,$i,'умножение');
echo mathOperation($h,$i,'деление');
