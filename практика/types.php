<h1>Типы данных php</h1>
<h2>Целые числа - int</h2>
<?php
$numder = 0b1100110110;
echo $numder;
?>
<h2>Числа сплавающей точкой - float</h2>
<?php
$a = 42.5;
$b = 42.;
$c = 1.5e5;
$d = 2.4e-3;
echo "$a, $b, $c, $d";
?>
<h2>Строки - string</h2>
<?php
$str = 'Переменная a = $a';
$str1 = "Переменная a = $a";
$str2 = "'WWW'";
echo $str, '<br>', $str1, $str2 ;
?>
<h2>Логические значения</h2>
<?php
$t = true;
$f = false;
echo "t = $t, f = $f ";
?>
<h2>Специальное значение - null</h2>
<?php 
$n = null;
echo "n = $n";
?>