<?php
if (empty($_GET)) {
    $result = 'Ничего не передано!';
}

if (empty($_GET['operation'])) {
    $result = 'Не передана операция';
}

$x1 = (int) $_GET['x1'];
$x2 = (int)$_GET['x2'];

$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';

switch ($_GET['operation']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '*':
        $result = $x1 * $x2;
        break;
    case '/':
        if ($x2 != 0) {
            $result = $x1 / $x2;
        }
        else {
            $result = 'Ошибка. Делить на 0 нельзя!';
        }
        break;

    default:
        $result = '';
}
?>
<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<form>
    <input type="text" name="x1">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="x2">
    <input type="submit" value="Посчитать">
    <br>
    <?php
        if(isset($_GET['operation'])){
            echo $expression . $result;
        };
    ?>
</form>
</body>
</html>