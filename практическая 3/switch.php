<h1>Задача 1 (Число словами)</h1> 
<?php 
$input_1 = $_GET['number_task1'] ?? ''; 
$result_1 = ''; 
if ($input_1 !== '' && is_numeric($input_1)) { 
    $a = (int)$input_1; 
    switch ($a) { 
        case 0: $result_1 = 'zero'; break; 
        case 1: $result_1 = 'one'; break; 
        case 2: $result_1 = 'two'; break; 
        case 3: $result_1 = 'three'; break; 
        case 4: $result_1 = 'four'; break; 
        case 5: $result_1 = 'five'; break; 
        case 6: $result_1 = 'six'; break; 
        case 7: $result_1 = 'seven'; break; 
        case 8: $result_1 = 'eight'; break; 
        case 9: $result_1 = 'nine'; break; 
        default: $result_1 = 'Число не нашлось'; 
    } 
} else if ($input_1 !== '') { 
    $result_1 = 'Введите число от 0 до 9'; 
} 
?> 
<form method="GET"> 
    <input type="text" name="number_task1" inputmode="numeric" pattern="[0-9]*" value="<?= htmlspecialchars($input_1) ?>"> 
    <input type="submit" value="ОК"> 
</form> 
<b><?= $result_1 ?></b> 

<h1>Задача 2 (Праздники по месяцам)</h1> 
<?php 
$input_2 = $_GET['number_task2'] ?? ''; 
$result_2 = ''; 
if ($input_2 !== '' && is_numeric($input_2)) { 
    $a = (int)$input_2; 
    switch ($a) { 
        case 1: $result_2 = "1 января — Новый год, 7 января — Рождество, 25 января — Татьянин день (День студента)"; break; 
        case 2: $result_2 = "14 февраля — День святого Валентина, 23 февраля — День защитника Отечества"; break; 
        case 3: $result_2 = "8 марта — Международный женский день, 20 марта — День весеннего равноденствия"; break; 
        case 4: $result_2 = "1 апреля — День дурака (смеха), 12 апреля — День космонавтики"; break; 
        case 5: $result_2 = "1 мая — Праздник Весны и Труда, 9 мая — День Победы, 24 мая — День славянской письменности"; break; 
        case 6: $result_2 = "1 июня — День защиты детей, 12 июня — День России, 27 июня — День молодежи"; break; 
        case 7: $result_2 = "7 июля — День Ивана Купала, 8 июля — День семьи, любви и верности"; break; 
        case 8: $result_2 = "2 августа — День ВДВ, 22 августа — День Государственного флага РФ"; break; 
        case 9: $result_2 = "1 сентября — День знаний, 13 сентября — День программиста"; break; 
        case 10: $result_2 = "5 октября — День учителя, 31 октября — Хэллоуин"; break; 
        case 11: $result_2 = "4 ноября — День народного единства, 29 ноября — День матери"; break; 
        case 12: $result_2 = "12 декабря — День Конституции РФ, 31 декабря — Новой год"; break; 
        default: $result_2 = "Номер месяца должен быть от 1 до 12"; 
    } 
} else if ($input_2 !== '') { 
    $result_2 = 'Введите номер месяца от 1 до 12'; 
} 
?> 
<form method="GET"> 
    <input type="text" name="number_task2" inputmode="numeric" pattern="[0-9]*" value="<?= htmlspecialchars($input_2) ?>"> 
    <input type="submit" value="ОК"> 
</form> 
<b><?= $result_2 ?></b> 

<h1>Задача 3 (Последняя цифра квадрата числа)</h1> 
<?php 
$input_3 = $_GET['number_task3'] ?? ''; 
$result_3 = ''; 
if ($input_3 !== '' && is_numeric($input_3)) { 
    $number = (int)$input_3; 
    $lastDigit = abs($number) % 10; 
    $result_3 = ($lastDigit * $lastDigit) % 10; 
} else if ($input_3 !== '') { 
    $result_3 = 'Введите число'; 
} 
?> 
<form method="GET"> 
    <input type="text" name="number_task3" inputmode="numeric" pattern="[0-9]*" value="<?= htmlspecialchars($input_3) ?>"> 
    <input type="submit" value="ОК"> 
</form> 
<b><?= $result_3 ?></b> 

<h1>Задача 4 (Склонение возраста)</h1> 
<?php 
$input_4 = $_GET['number_task4'] ?? ''; 
$result_4 = ''; 
if ($input_4 !== '' && is_numeric($input_4)) { 
    $k = (int)$input_4; 
    if ($k >= 1 && $k <= 99) { 
        if ($k == 11 || $k == 12 || $k == 13 || $k == 14) { 
            $result_4 = "Мне $k лет"; 
        } 
        else if ($k == 1 || $k == 21 || $k == 31 || $k == 41 || $k == 51 || $k == 61 || $k == 71 || $k == 81 || $k == 91) { 
            $result_4 = "Мне $k год"; 
        } 
        else if ($k == 2 || $k == 3 || $k == 4 || $k == 22 || $k == 23 || $k == 24 || $k == 32 || $k == 33 || $k == 34 || $k == 42 || $k == 43 || $k == 44 || $k == 52 || $k == 53 || $k == 54 || $k == 62 || $k == 63 || $k == 64 || $k == 72 || $k == 73 || $k == 74 || $k == 82 || $k == 83 || $k == 84 || $k == 92 || $k == 93 || $k == 94) { 
            $result_4 = "Мне $k года"; 
        } 
        else { 
            $result_4 = "Мне $k лет"; 
        } 
    } else { 
        $result_4 = 'Введите число от 1 до 99'; 
    } 
} else if ($input_4 !== '') { 
    $result_4 = 'Введите число'; 
} 
?> 
<form method="GET"> 
    <input type="hidden" name="number_task1" value="<?= htmlspecialchars($_GET['number_task1'] ?? '') ?>"> 
    <input type="hidden" name="number_task2" value="<?= htmlspecialchars($_GET['number_task2'] ?? '') ?>"> 
    <input type="hidden" name="number_task3" value="<?= htmlspecialchars($_GET['number_task3'] ?? '') ?>"> 
    <input type="text" name="number_task4" value="<?= htmlspecialchars($input_4) ?>"> 
    <input type="submit" value="ОК"> 
    <b><?= $result_4 ?></b> 
</form>
