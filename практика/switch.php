<h1>Оператор выбора - switch</h1>
<?php
$a = 3;
switch ($a) {
    case 1:
        echo 'a = 1';
        break; 
    case 2:
        echo 'a = 2';
        break;
    case 5:
        echo 'a = 5';
        break;
    default:
        echo 'Число не нашлось';
} 
?>