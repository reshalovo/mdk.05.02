
<h1>Задача 1</h1>
<?php
$words = [
    "monday" => "понедельник",
    "friday" => "пятница",
    "apple" => "яблоко",
    "cat" => "кот",
    "dog" => "собака",
    "house" => "дом",
    "water" => "вода",
    "sun" => "солнце",
    "book" => "книга",
    "one" => "один"
];
foreach ($words as $eng => $rus) {
    echo "$eng - $rus <br>";
}
?>
<h1>Задача 2</h1>
<?php
$search = "один"; // Слово, которое мы ищем
$found = false;    // Флаг: нашли ли мы слово

foreach ($words as $eng => $rus) {
    if ($rus == $search) {
        echo "$search - $eng <br>";
        $found = true;
        break; // Если нашли, выходим из цикла
    }
}

// Если обошли весь массив и флаг остался false
if ($found == false) {
    echo "$search - В словаре нет такого слова <br>";
}
?>
<h1>Задача 3</h1>
<?php
$search = "cat"; // Можно ввести "cat" или "собака" или "кракозябра"
$found = false;

foreach ($words as $eng => $rus) {
    // Проверяем совпало ли с английским ключом ИЛИ с русским значением
    if ($eng == $search) {
        echo "$search - $rus <br>";
        $found = true;
        break;
    } elseif ($rus == $search) {
        echo "$search - $eng <br>";
        $found = true;
        break;
    }
}

if (!$found) {
    echo "$search - В словаре нет такого слова <br>";
}
?>
<h1>Задача 4</h1>
<form method="GET">
    <input type="text" name="word" placeholder="Введите слово для перевода">
    <button type="submit">Перевести</button>
</form>

<?php
// Проверяем, пришли ли данные из формы через GET-запрос 
if (isset($_GET['word'])) { 
    $search = $_GET['word']; 
    $found = false; 
    foreach ($words as $english => $russian) {
        // Если ввели английское слово
        if ($search == $english) {
            echo "Результат: $search - $russian <br>";
            $found = true;
            break; 
        }
        // Если ввели русское слово 
        if ($search == $russian) {
            echo "Результат: $search - $english <br>";
            $found = true;
            break; 
        }
    }
    // Если слова нет в массиве
    if (!$found) { 
        echo "Результат: $search - В словаре нет такого слова <br>"; 
    } 
} 
?>
<h1>Задача 5</h1>
<?php
$str = "banana";
$result = []; // Сюда будем складывать буквы и их количество

// Получаем длину строки
$len = strlen($str); 

// Идем циклом по каждой букве строки
for ($i = 0; $i < $len; $i++) {
    $char = $str[$i]; // Берем текущий символ по его индексу
    
    // Если такая буква уже есть в массиве, увеличиваем счетчик на 1
    if (isset($result[$char])) {
        $result[$char]++;
    } else {
        // Если буквы еще нет, добавляем её со значением 1
        $result[$char] = 1;
    }
}

// Выводим полученный ассоциативный массив
foreach ($result as $letter => $count) {
    echo "'$letter' => $count <br>";
}
?>
<h1>Задача 6</h1>
<?php
// Исходный массив из Задания 1
$words = [
    "monday" => "понедельник",
    "friday" => "пятница",
    "apple" => "яблоко",
    "cat" => "кот"
];

$flipped_words = []; // Новый пустой массив

// Перебираем старый массив
foreach ($words as $eng => $rus) {
    // Записываем в новый массив: русское слово становится КЛЮЧОМ, английское - ЗНАЧЕНИЕМ
    $flipped_words[$rus] = $eng; 
}

// Выводим измененный массив на экран
foreach ($flipped_words as $key => $value) {
    echo "$key - $value <br>";
}
?>