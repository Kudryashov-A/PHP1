<?php
$title = 'My test page';
$h1 = 'Это заголовок H1 моей тестовой страницы';
$date = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title?></title>
</head>
<body>
<?php
echo "<h1>$h1</h1>";

echo "<h3>Задание 1 выполнено</h3>";

echo "<h3>Задание 2:</h3>";

$name = 'Andrey';
echo "Hello $name!";
define('MY_CONST', 28);
echo '<br>' . MY_CONST;

$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3";

$a = 5;
$b = 2;
echo $a + $b . '<br>';    // сложение
echo $a * $b . '<br>';    // умножение
echo $a - $b . '<br>';    // вычитание
echo $a / $b . '<br>';  // деление
echo $a % $b . '<br>'; // остаток от деления
echo $a ** $b . '<br>'; // возведение в степень

$a = 4;
$b = 5;
$a += $b;
echo 'a = ' . $a;
$a = 0;
echo $a++;     // Постинкремент
echo ++$a;    // Преинкремент
echo $a--;     // Постдекремент
echo --$a;    // Предекремент

$a = 4;
$b = 5;
var_dump($a == $b);  // Сравнение по значению
var_dump($a === $b); // Сравнение по значению и типу
var_dump($a > $b);    // Больше
var_dump($a < $b);    // Меньше
var_dump($a <> $b);  // Не равно
var_dump($a != $b);   // Не равно
var_dump($a !== $b); // Не равно без приведения типов
var_dump($a <= $b);  // Меньше или равно
var_dump($a >= $b);  // Больше или равно
echo '<br>';
?>

<?php
echo "<h3>Задание 3:</h3>";
$a = 5;
$b = '05';
var_dump($a == $b);         // Почему true?
echo 'Сравнение только по значению, без учета типа переменной, поэтому $a == $b true.';
echo '<br>';
var_dump((int)'012345');     // Почему 12345?
echo 'Строка \'012345\' приводится к числу, поэтому \'0\' отбрасывается.';
echo '<br>';
var_dump((float)123.0 === (int)123.0); // Почему false?
echo 'Результат false, так как сравнение происходит как по значению, так и по типу, которые различны.';
echo '<br>';
var_dump((int)0 === (int)'hello, world'); // Почему true?
echo 'Результат true, так как при приведении к числу, строка принимает значение \'0\'.';

echo "<h3>Задание 4 выполнено</h3>";
echo "Текущий год: $date";

echo "<h3>Задание 5:</h3>";
$a = 1;
$b = 5;
echo "a = $a, b = $b <br>Способ 1:<br>";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "a = $a, b = $b <br>Ещё раз другим способом:<br>";

$a+=+$b-$b=$a;
echo "a = $a, b = $b";

?>
</body>
</html>