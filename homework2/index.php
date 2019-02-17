<?php
$title = 'Homework 2';
$h1 = 'Домашняя работа № 2';
$year = date('Y');
$html = file_get_contents('page.html');
$html = str_replace('{title}', $title, $html);
$footer = file_get_contents('footer.html');
$footer = str_replace('{footer}', $year, $footer);
echo $html;

echo "<h1>$h1</h1>";
echo "<h3>Задание 1</h3>";

$a = 3;
$b = 7;
function myMathFunc($a, $b)
{
    if ($a >= 0 && $b >= 0) {
        echo "Разность a и b: " . ($a - $b);
    } elseif ($a < 0 && $b < 0) {
        echo "Произведение a и b: " . ($a * $b);
    } else {
        echo "Сумма a и b: " . ($a + $b);
    }
}

myMathFunc($a, $b);

echo "<h3>Задание 2</h3>";

$a = mt_rand(0, 15);
echo "a = $a<br>";
switch ($a) {
    case '0':
        echo '0 ';
    case '1':
        echo '1 ';
    case '2':
        echo '2 ';
    case '3':
        echo '3 ';
    case '4':
        echo '4 ';
    case '5':
        echo '5 ';
    case '6':
        echo '6 ';
    case '7':
        echo '7 ';
    case '8':
        echo '8 ';
    case '9':
        echo '9 ';
    case '10':
        echo '10 ';
    case '11':
        echo '11 ';
    case '12':
        echo '12 ';
    case '13':
        echo '13 ';
    case '14':
        echo '14 ';
    case '15':
        echo '15 ';
        break;
    default:
        echo 'Число вне диапазона';
}

echo "<h3>Задание 3</h3>";

function sum($x, $y)
{
    return $x + $y;
}

function dif($x, $y)
{
    return $x - $y;
}

function mul($x, $y)
{
    return $x * $y;
}

function div($x, $y)
{
    if ($y == 0)
        return 'Ошибка. Попытка деления на 0';
    return $x / $y;
}

$x = 7;
$y = 2;

echo "x = $x, y = $y<br>";
echo "<br>x + y = " . sum($x, $y);
echo "<br>x - y = " . dif($x, $y);
echo "<br>x * y = " . mul($x, $y);
echo "<br>x / y = " . div($x, $y);

echo "<h3>Задание 4</h3>";

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'Сумма':
            return sum($arg1, $arg2);
            break;
        case 'Разность':
            return dif($arg1, $arg2);
            break;
        case 'Произведение':
            return mul($arg1, $arg2);
            break;
        case 'Частное':
            return div($arg1, $arg2);
            break;
    }
}

$operation = 'Разность';
echo "$operation $x и $y = " . mathOperation($x, $y, $operation);

echo "<h3>Задание 6</h3>";

function power($val, $pow)
{
    if ($pow > 1)
        return $val * power($val, $pow - 1);
    if ($pow === 1)
        return $val;
    if ($pow === 0)
        return 1;
    return 'Степень не поддерживается';
}

$val = 3;
$pow = 2;
echo "$val в степени $pow = " . power(3, 2);

echo "<h3>Задание 7</h3>";

function displayTime($hour, $minute)
{
    $hourName = 'часов';
    $minuteName = 'минут';
    if ($hour < 10 || $hour > 20) {
        if ($hour % 10 == 1) {
            $hourName = 'час';
        } elseif ($hour % 10 == 2 || $hour % 10 == 3 || $hour % 10 == 4) {
            $hourName = 'часа';
        }
    }
    if ($minute < 10 || $minute > 20) {
        if ($minute % 10 == 1) {
            $minuteName = 'минутa';
        } elseif ($minute % 10 == 2 || $minute % 10 == 3 || $minute % 10 == 4) {
            $minuteName = 'минуты';
        }
    }
    echo "$hour $hourName $minute $minuteName";
}

displayTime(date('H'), date('i'));

//Задание 5

echo $footer;