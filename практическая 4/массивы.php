<h3>Задача 1</h3>
<?php
$numbers = [3, -5, 10, 0, 7, -2, 8];

// Сначала считаем, что первый элемент и самый большой, и самый маленький
$maxValue = $numbers[0];
$minValue = $numbers[0];
$maxIndex = 0;
$minIndex = 0;

foreach ($numbers as $index => $value) {
    if ($value > $maxValue) {
        $maxValue = $value;
        $maxIndex = $index;
    }
    if ($value < $minValue) {
        $minValue = $value;
        $minIndex = $index;
    }
}

echo "Максимум: значение = $maxValue, индекс = $maxIndex\n";
echo "Минимум: значение = $minValue, индекс = $minIndex\n";
?>
<h3>Задача 2</h3>
<?php
$numbers = [3, -5, 10, 0, 7, -2, 8];

$sum = 0;
$product = 1;

foreach ($numbers as $value) {
    $sum += $value;          // то же самое, что $sum = $sum + $value
    $product *= $value;      // то же самое, что $product = $product * $value
}

echo "Сумма: $sum\n";
echo "Произведение: $product\n";
?>
<h3>Задача 3</h3>
<?php
$numbers = [3, -5, 10, 0, 7, -2, 8];

$sum = 0;
foreach ($numbers as $value) {
    $sum += $value;
}

$count = count($numbers);
$average = $count > 0 ? $sum / $count : 0; // защита от деления на 0

echo "Среднее арифметическое: " . number_format($average, 2) . "\n";
?>
<h3>Задача 4</h3>
<?php
$floats = [2.5, -3.7, 0.5, -1.2, 4.0];
$result = [];

foreach ($floats as $value) {
    if ($value >= 0) {
        // положительное или ноль: возводим в квадрат
        $result[] = $value * $value;
    } else {
        // отрицательное: берём модуль
        $result[] = abs($value);
    }
}

echo "Исходный массив: " . implode(", ", $floats) . "\n";
echo "Результат:       " . implode(", ", $result) . "\n";
?>
<h3>Задача 5</h3>
<?php
$numbers = [3, -5, 10, 0, 7, -2, 8];

foreach ($numbers as $index => $value) {
    if ($index % 2 === 0) {
        echo "Индекс $index: значение $value\n";
    }
}
<h3>Задача 6</h3>
<?php
$numbers = [3, -5, 10, 0, 7, -2, 8];

for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] > $numbers[$i - 1]) {
        echo "Элемент {$numbers[$i]} больше предыдущего {$numbers[$i - 1]}\n";
    }
}
?>
<h3>Задача 7</h3>
<?php
$numbers = [3, -5, 10, 0, 7, -2, 8];
$swapped = $numbers;

for ($i = 0; $i < count($swapped) - 1; $i += 2) {
    $temp = $swapped[$i];
    $swapped[$i] = $swapped[$i + 1];
    $swapped[$i + 1] = $temp;
}

echo "До перестановки: " . implode(", ", $numbers) . "\n";
echo "После:          " . implode(", ", $swapped) . "\n";
?>