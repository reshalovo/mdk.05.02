<h3>Задача 1</h3>
<?php
$dictionary = [
    'monday'    => 'понедельник',
    'tuesday'   => 'вторник',
    'wednesday' => 'среда',
    'thursday'  => 'четверг',
    'friday'    => 'пятница',
    'saturday'  => 'суббота',
    'sunday'    => 'воскресенье',
    'apple'     => 'яблоко',
    'banana'    => 'банан',
    'orange'    => 'апельсин'
];

// Выводим в формате: monday - понедельник
foreach ($dictionary as $en => $ru) {
    echo "$en - $ru\n";
}
?>
<h3>Задача 2</h3>
<?php
$dictionary = [
    'monday'    => 'понедельник',
    'tuesday'   => 'вторник',
    'wednesday' => 'среда',
    'thursday'  => 'четверг',
    'friday'    => 'пятница',
    'saturday'  => 'суббота',
    'sunday'    => 'воскресенье',
    'apple'     => 'яблоко',
    'banana'    => 'банан',
    'orange'    => 'апельсин'
];

// Слово для поиска (можно менять здесь)
$searchWord = 'пятница';

$found = false;

foreach ($dictionary as $en => $ru) {
    if ($ru === $searchWord) {
        echo "$ru - $en\n";   // выводим: русское - английское
        $found = true;
        break;                // нашли, дальше искать не надо
    }
}

if (!$found) {
    echo "В словаре нет такого слова\n";
}
?>
<h3>Задача 3</h3>
<?php
$dictionary = [
    'monday'    => 'понедельник',
    'tuesday'   => 'вторник',
    'wednesday' => 'среда',
    'thursday'  => 'четверг',
    'friday'    => 'пятница',
    'saturday'  => 'суббота',
    'sunday'    => 'воскресенье',
    'apple'     => 'яблоко',
    'banana'    => 'банан',
    'orange'    => 'апельсин'
];

// Можно менять это слово для проверки
$searchWord = 'apple';

$found = false;

// Сначала ищем как ключ (английское слово)
if (array_key_exists($searchWord, $dictionary)) {
    echo "$searchWord - {$dictionary[$searchWord]}\n";
    $found = true;
} else {
    // Если не нашли как ключ, ищем как значение (русское слово)
    foreach ($dictionary as $en => $ru) {
        if ($ru === $searchWord) {
            echo "$ru - $en\n";
            $found = true;
            break;
        }
    }
}

if (!$found) {
    echo "В словаре нет такого слова\n";
}
?>
<h3>Задача 4</h3>
<?php
$dictionary = [
    'monday'    => 'понедельник',
    'tuesday'   => 'вторник',
    'wednesday' => 'среда',
    'thursday'  => 'четверг',
    'friday'    => 'пятница',
    'saturday'  => 'суббота',
    'sunday'    => 'воскресенье',
    'apple'     => 'яблоко',
    'banana'    => 'банан',
    'orange'    => 'апельсин'
];

$result = '';
$word = '';

// Для GET берём из $_GET['word']
if (isset($_GET['word'])) {
    $word = trim($_GET['word']);
    
    if ($word !== '') {
        $found = false;

        // Ищем как английское слово (ключ)
        if (array_key_exists($word, $dictionary)) {
            $result = "$word - {$dictionary[$word]}";
            $found = true;
        } else {
            // Ищем как русское слово (значение)
            foreach ($dictionary as $en => $ru) {
                if ($ru === $word) {
                    $result = "$ru - $en";
                    $found = true;
                    break;
                }
            }
        }

        if (!$found) {
            $result = "В словаре нет такого слова";
        }
    } else {
        $result = 'Введите слово.';
    }
}
?>
<h3>Задача 5</h3>
<?php
$str = 'banana';

// Приведём к нижнему регистру, чтобы 'B' и 'b' считались одинаково (если нужно)
$str = strtolower($str);

$counts = [];

for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];

    if (isset($counts[$char])) {
        $counts[$char]++;
    } else {
        $counts[$char] = 1;
    }
}

// Вывод массива
foreach ($counts as $char => $count) {
    echo "'$char' => $count\n";
}
?>
<h3>Задача 6</h3>
<?php
$dictionary = [
    'monday'    => 'понедельник',
    'tuesday'   => 'вторник',
    'wednesday' => 'среда',
    'thursday'  => 'четверг',
    'friday'    => 'пятница',
    'saturday'  => 'суббота',
    'sunday'    => 'воскресенье',
    'apple'     => 'яблоко',
    'banana'    => 'банан',
    'orange'    => 'апельсин'
];

// Меняем ключи и значения
$reversed = array_flip($dictionary);

// Выводим результат
foreach ($reversed as $ru => $en) {
    echo "$ru - $en\n";
}
?>