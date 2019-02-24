<?php
$title = 'Homework 3';
$h1 = 'Домашняя работа № 3';
$year = date('Y');
$html = file_get_contents('menu.html');
$html = str_replace('{title}', $title, $html);

echo "<h1>$h1</h1>";

echo "<h3>Задание 1</h3>";

echo $i = 0;
while ($i++ <= 100) {
    if ($i % 3 == 0)
        echo ', ' . $i;
}

echo "<h3>Задание 2</h3>";

function listI($i)
{
    do {
        if ($i == 0) echo $i++ . ' - это ноль.<br>';
        echo $i++ . ' - нечетное число.<br>';
        echo $i++ . ' - четное число.<br>';
    } while ($i <= 10);
}

listI(0);

echo "<h3>Задание 3</h3>";

$cities = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Касимов', 'Ряжск', 'Кораблино'],
];

foreach ($cities as $obl => $val) {
    echo "<br>$obl:<br>";
    foreach ($val as $num => $city) {
        if ($num != 0) echo ', ';
        echo $city;
    }
    echo '.';
}

echo "<h3>Задание 4, 5 и 9</h3>";

function translit($bigStrRus)
{
    echo $bigStrRus . ' => ';
    $ab = [
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
        'и' => 'i', 'й' => 'iy', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r',
        'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
        'ъ' => '\'', 'ы' => 'y', 'ь' => '\'', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
        'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',
        'И' => 'I', 'Й' => 'Iy', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R',
        'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C', 'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch',
        'Ъ' => '\'', 'Ы' => 'Y', 'Ь' => '\'', 'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
    ];
    $arrBigStrRus = explode(' ', $bigStrRus);
    $arrBigStrTr = [];
    foreach ($arrBigStrRus as $strRus) {
        $arrStrRus = str_split($strRus, 2);
        $arrStrTr = [];

        foreach ($arrStrRus as $val1) {
            foreach ($ab as $key => $val2) {
                if ($key == $val1)
                    $arrStrTr[] = $val2;
            }
            if (!in_array($val1, array_keys($ab)))
                $arrStrTr[] = $val1;
        }

        $strTr = implode($arrStrTr);
        $arrBigStrTr[] = $strTr;
    }
    echo $bigStrTr = implode('_', $arrBigStrTr);
}

translit('Привет, дружок!');


echo "<h3>Задание 6</h3>";

$menu = [
    0 => 'Main',
    'News' => ['Sport news', 'Politic news', 'Science news'],
    2 => 'About us',
    3 => 'Contacts'
];

$num = 0;
foreach ($menu as $menuKey => $menuVal) {
    if (!is_array($menuVal)) {
        $html = str_replace('{' . $num . '}', $menuVal, $html);
    }
    else {
        $html = str_replace('{' . $num . '}', $menuKey, $html);
        foreach ($menuVal as $menuItemKey => $menuItemVal) {
            $html = str_replace('{' . $num . '_' . $menuItemKey . '}', $menuItemVal, $html);
        }
    }
    $num++;
}

echo $html;

echo "<h3>Задание 7</h3>";

for ($i = 0; $i < 10; print $i++ . '<br>') {
}

echo "<h3>Задание 8</h3>";

$regexp = '/^К/u';
foreach ($cities as $obl => $val) {
    echo "<br>$obl:<br>";
    foreach ($val as $city) {
        if (preg_match($regexp, $city))
        echo "$city ";
    }
}