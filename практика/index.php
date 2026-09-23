<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>изучаем php</h1>
    <h2>вывод на экран</h2>
    <?php
    echo "вывод через команду echo";
    ?>
    <h3>Сокращенный echo</h3>
    <?= "вывод  через сокращенный echo" ?>
    <?php 
    $number = 42;
    $num1 = $number  * 4;
    echo $num1;
    ?>
    <h3>ариф операции</h3>
    <p> + - * / ** % </p>
    <?php
    $a = 5;
    $b = 10;
    $c = 8;
    $res = ($a +$b) * $c;
    echo "a = $a,b = $b, c = $c, res = $res";
    ?>


</body>
</html>
