<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Практическая работа</title>
</head>
<body>

<?php

echo "<h2>Формула 1</h2>";

$a = 10;
$b = 5;
$c = 2;
$d = 4;

echo "a = $a <br>";
echo "b = $b <br>";
echo "c = $c <br>";
echo "d = $d <br>";

$result1 = ($a / $c) * ($b / $d) - (($a * $b - $c) / ($c * $d));

echo "Результат = " . $result1 . "<br><br>";


echo "<h2>Формула 2</h2>";

$x = 4;
$y = 6;

echo "x = $x <br>";
echo "y = $y <br>";

$result2 = (($x + $y) / ($y + 1)) - (($x * $y - 12) / (34 + $x));

echo "Результат = " . $result2 . "<br><br>";


echo "<h2>Формула 3</h2>";

$x = 5;
$y = 2;

echo "x = $x <br>";
echo "y = $y <br>";

$result3 = pow((($x + 1) / ($x - 1)), $x) + (18 * $x * pow($y, 2)) - (pow((1 + (1 / pow($x, 2))), $x) - (12 * pow($x, 2) * $y));

echo "Результат = " . $result3 . "<br>";

?>

</body>
</html>