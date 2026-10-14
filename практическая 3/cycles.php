<?php
echo "<h1>Задача 1</h1>";
$a = 2;
$b = 3;
$c = 5;

$num = $a;
for ($i = 0; $i < $c; $i++) {
    echo $num . " ";
    $num = $num * $b;
}

echo "<h1>Задача 2</h1>";
$n2 = 10;
$sum2 = 0;

for ($i = 1; $i <= $n2; $i++) {
    $sum2 = $sum2 + $i;
}
echo $sum2;

echo "<h1>Задача 3</h1>";
$n3 = 6;
$res3 = 1;

for ($i = 1; $i <= $n3; $i++) {
    if ($i % 2 == 0) {
        $res3 = $res3 * $i;
    }
}
echo $res3;

echo "<h1>Задача 4</h1>";
$days = 7; 
$total = 0;
$run = 10;

for ($d = 1; $d <= $days; $d++) {
    $total = $total + $run;
    $run = $run * 1.10;
}
echo $total;

echo "<h1>Задача 5</h1>";
$legs = 64;

for ($rabbits = 0; $rabbits <= $legs / 4; $rabbits++) {
    $rem = $legs - ($rabbits * 4);
    $geese = $rem / 2;
    echo "Кроликов: " . $rabbits . ", Гусей: " . $geese . "<br>";
}
