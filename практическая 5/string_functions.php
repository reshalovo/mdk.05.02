<h1>Стандартные функции для строк</h1>
<h2>Получение длины -strlen</h2>
<?php 
$str = 'Hello word';
$strR = 'Привет миир';
echo 'Длина str'. strlen($str) . 'Символов', '<br>';
echo 'Длина strR'. mb_strlen($str) . 'Символов', '<br>';
?>
<h2>Поиск подстроки</h2>
<?php 
$pos = strpos($str, 'word');
echo "позиция world - $pos" , '<br>';
?>
<h2>Изменение регистра - strtolower</h2>
<h2>Перевод строки в массив - explode</h2>
<p>Разбивает строку на элементы массива по заданному разделителю.</p>
<h1>Задание 1 - вывод символов из скобок</h1>
<?php 
$str = "Текст (привет) конец";
//ищем позиции скобок
$openPos = strpos($str, '(');
$closePos = strpos($str, ')');
//вырезаем текст внутри()
$start = $openPos + 1;
// считает сколько именнно символов нужно отрезать
$length = $closePos - $start;
$result = substr($str, $start, $length);
echo $result;
?>
<h1>Задание 2 - Подсчитать, сколько слов в строке.</h1>
<?php 
$str = "Сегодня отличная погода для прогулки.";
//чистим от " ."
$cleanStr = trim($str, " .");
//сколько проблеом
$spaces = substr_count($cleanStr, " ");
$count = $spaces + 1;
echo $count;
?>
<H1>Задание 3 - слова в которых одна и та же буква в начале и концу</H1>
<?php 
$str = "Анна купила казак, топор и шалаш у реки.";
$cleanStr = str_replace([',', '.', '!', '?'], '', $str);
//список отдельных слов
$words = explode(' ', $cleanStr);
$resultWords = [];
foreach ($words as $word) {
    if (mb_strlen($word) > 1) {
        //все маленькие
        $lowerWord = mb_strtolower($word);
        //1 буква
        $firstLetter = mb_substr($lowerWord, 0, 1);
        //псоледнняя
        $lastLetter = mb_substr($lowerWord, -1, 1);
        //сравниваем
        if ($firstLetter === $lastLetter) {
            $resultWords[] = $word;
        }
    }
}
echo implode(' ', $resultWords);
?>
<h1>Задание 4 - Подсчет различных символов</h1>
<?php
$str = "привет мир";
//разрезаем строку на символы
$chars = mb_str_split($str);
$uniqueChars = [];
foreach ($chars as $char) {
    //есть ли внутри списка уник симво
    if (!in_array($char, $uniqueChars)) {
        //пролверка на дубликатов
        $uniqueChars[] = $char;
    }
}
echo "Количество различных символов: " . count($uniqueChars) . "<br>";
echo "Сами символы: " . implode(', ', $uniqueChars);
?>
<h1>Задание 5 - сколько букв r k t</h1>
<?php 
$str = "Rocket ticket for the track";
//маленькие букывы
$lowerStr = strtolower($str);
//substr_count - сколько нужнеых букв
$countR = substr_count($lowerStr, 'r');
$countK = substr_count($lowerStr, 'k');
$countT = substr_count($lowerStr, 't');
$total = $countR + $countK + $countT;
echo "Букв r: " . $countR . "<br>";
echo "Букв k: " . $countK . "<br>";
echo "Букв t: " . $countT . "<br>";
echo "Всего этих букв: " . $total;
?>
<h1>Задание 6 - длина короткого и длинного слово</h1>
<?php
$str = "На поляне вырос огромный белый гриб.";
$cleanStr = str_replace([',', '.', '!', '?'], '', $str);
//список отдельных слов
$words = explode(' ', $cleanStr);
//mb_strlen - колва букв в слове
$minLength = mb_strlen($words[0]);
$maxLength = mb_strlen($words[0]);
foreach ($words as $word) {
    //ишем длину и сохр в currentLength
    $currentLength = mb_strlen($word);
    if ($currentLength < $minLength) {
        $minLength = $currentLength;
    }
    if ($currentLength > $maxLength) {
        $maxLength = $currentLength;
    }
}
echo "Длина самого короткого слова: " . $minLength . "<br>";
echo "Длина самого длинного слова: " . $maxLength;
?>
<h1>Задание 8 - Удалить часть в скорбках</h1>
<?php 
$str = "Сегодня (хоть и шел дождь) мы отлично погуляли.";
//mb_strpos - выдает индекс
$openPos = mb_strpos($str, '(');
$closePos = mb_strpos($str, ')');
//mb_substr -вырезает нужный кусок
$before = mb_substr($str, 0, $openPos);
$after = mb_substr($str, $closePos + 1);
$result = $before . $after;
echo $result;
?>