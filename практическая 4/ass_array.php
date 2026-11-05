<h1>Задача 1 — Создание и вывод словаря</h1>
<?php
// $words — ассоциативный массив: ключ = англ. слово, значение = рус. перевод
$words = [
    "monday"   => "понедельник",
    "friday"   => "пятница",
    "apple"    => "яблоко",
    "cat"      => "кот",
    "dog"      => "собака",
    "house"    => "дом",
    "water"    => "вода",
    "sun"      => "солнце",
    "book"     => "книга",
    "one"      => "один"
];

// foreach ($arr as $key => $value) — перебирает массив, отдавая ключ и значение
foreach ($words as $eng => $rus) {
    // echo — выводит текст на экран; <br> — перенос строки в HTML
    echo "$eng - $rus <br>";
}
?>

<h1>Задача 2 — Поиск перевода по русскому слову</h1>
<?php
// $search — искомое слово (то, что мы хотим найти в словаре)
$search = "один";
// $found — флаг: false = не нашли, true = нашли (чтобы потом вывести нужное сообщение)
$found = false;

foreach ($words as $eng => $rus) {
    // $rus — русское значение текущей пары; сравниваем с $search
    if ($rus == $search) {
        // Нашли: выводим «русское — английское»
        echo "$search - $eng <br>";
        $found = true;      // помечаем, что нашли
        break;              // break — немедленно выходим из цикла (экономим время)
    }
}

// Если после цикла флаг остался false — слова нет в словаре
if ($found == false) {
    echo "$search - В словаре нет такого слова <br>";
}
?>

<h1>Задача 3 — Перевод в обе стороны</h1>
<?php
// $search — слово, которое ввёл пользователь (может быть англ. или рус.)
$search = "cat";
$found = false;

foreach ($words as $eng => $rus) {
    // Сначала проверяем: совпадает ли $search с английским ключом ($eng)
    if ($eng == $search) {
        echo "$search - $rus <br>";   // выводим перевод на русский
        $found = true;
        break;
    }
    // Иначе проверяем: совпадает ли $search с русским значением ($rus)
    elseif ($rus == $search) {
        echo "$search - $eng <br>";   // выводим английский ключ
        $found = true;
        break;
    }
}

if (!$found) {           // !$found — то же самое, что $found == false
    echo "$search - В словаре нет такого слова <br>";
}
?>

<h1>Задача 4 — Перевод через форму</h1>
<form method="GET">
    <!-- name="word" — имя поля, по которому PHP получит значение из формы -->
    <input type="text" name="word" placeholder="Введите слово для перевода">
    <button type="submit">Перевести</button>
</form>

<?php
// isset($_GET['word']) — проверяет: пришла ли переменная word из формы (чтобы не было ошибки при первом заходе)
if (isset($_GET['word'])) {
    // $_GET['word'] — значение, которое пользователь ввёл в поле name="word"
    $search = $_GET['word'];
    $found = false;

    foreach ($words as $english => $russian) {
        if ($search == $english) {
            echo "Результат: $search - $russian <br>";
            $found = true;
            break;
        }
        if ($search == $russian) {
            echo "Результат: $search - $english <br>";
            $found = true;
            break;
        }
    }

    if (!$found) {
        echo "Результат: $search - В словаре нет такого слова <br>";
    }
}
?>

<h1>Задача 5 — Подсчёт количества каждого символа</h1>
<?php
$str = "banana";          // $str — исходная строка
$result = [];             // $result — пустой ассоциативный массив для счётчиков
$len = strlen($str);      // strlen() — возвращает длину строки (кол-во символов)

for ($i = 0; $i < $len; $i++) {
    $char = $str[$i];     // $str[$i] — символ строки по индексу i (нумерация с 0)

    // isset($result[$char]) — проверяет: есть ли уже такой ключ (символ) в массиве
    if (isset($result[$char])) {
        $result[$char]++; // если есть — увеличиваем счётчик на 1
    } else {
        $result[$char] = 1; // если нет — создаём ключ и ставим счётчик 1
    }
}

foreach ($result as $letter => $count) {
    // выводим пары «символ => количество»
    echo "'$letter' => $count <br>";
}
?>

<h1>Задача 6 — Перевернуть массив (ключи ↔ значения)</h1>
<?php
$words = [
    "monday" => "понедельник",
    "friday" => "пятница",
    "apple"  => "яблоко",
    "cat"    => "кот"
];

$flipped_words = [];      // новый пустой массив для результата

foreach ($words as $eng => $rus) {
    // делаем русское слово ключом, а английское — значением
    $flipped_words[$rus] = $eng;
}

foreach ($flipped_words as $key => $value) {
    echo "$key - $value <br>";
}
?>

<h1>Задача 7 — Ассоциативный массив: длина слова => строка слов</h1>
<?php
$simple_words = ["кот", "дом", "лес", "слон", "мышь", "рак", "кит"];
$grouped = [];            // итоговый ассоциативный массив

foreach ($simple_words as $word) {
    $length = strlen($word);  // strlen() — длина текущего слова

    // если для этой длины ещё нет ключа в массиве — создаём пустую строку
    if (!isset($grouped[$length])) {
        $grouped[$length] = "";
    }

    // добавляем пробел перед словом, если строка уже не пустая
    if ($grouped[$length] !== "") {
        $grouped[$length] .= " ";
    }
    // дописываем слово к строке
    $grouped[$length] .= $word;
}

foreach ($grouped as $len => $words_list) {
    echo "Длина $len: $words_list <br>";
}
?>
