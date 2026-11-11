<h1>Функции</h1>
<h2>Определение функции и ее вызов</h2>
<?php
sayHello(); 
function sayHello()
{
    echo '<p>Привет</p>';
}
sayHello();
sayHello();

?>
<h1>Передача в  функции параметров</h1>
<?php
sayHello(); 
function sayHello1($name)
{
    echo "<p>Привет</p";
}
sayHello();
sayHello();
?>

<h1>Задание 1 - вычисление длины окружности</h1>
<form method="GET">
    <p>Введите радиус окружности: 
        <input type="number" name="radius" required>
    </p>
    <button type="submit">Вычислить</button>
</form>

<?php
// Объявляем функцию с одним параметром $r
function getcircuit($r)
{
    return 2 * M_PI * $r;
}

// Функция isset() проверяет, была ли отправлена форма,существует ли ключ radius в массиве $_GET
if (isset($_GET['radius'])) {
    
    // Получаем значение из адресной строки и превращаем его в целое число
    $radius = $_GET['radius'];
    
    // Проверяем, что введенный радиус больше нуля
    if ($radius > 0) {
        // Вызываем нашу функцию и передаем в нее значение радиуса
        $result = getcircuit($radius);
        echo "<p>Длина окружности: <strong>" . round($result, 2) . "</strong></p>";
    } else {
        // Если ввели 0 или отрицательное число, выводим предупреждение
        echo "<p>Радиус должен быть больше нуля!</p>";
    }
}

?>
<h1>Задание 2 - вычисление площади треугольника</h1>
<form method="GET">
    <p>Сторона A: <input type="number" name="a" required></p>
    <p>Сторона B: <input type="number" name="b" required></p>
    <p>Сторона C: <input type="number" name="c" required></p>
    <button type="submit">Вычислить</button>
</form>

<?php
function getTriangleArea($a, $b, $c)
{
    // Эти три условия автоматически отсеивают и нули, и отрицательные числа
    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
        return 0;
    }

    $p = ($a + $b + $c) / 2;
    
    // Сразу возвращаем результат без создания лишней переменной $area
    return sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
}

// В функцию isset() можно передать все три переменные сразу через запятую
if (isset($_GET['a'], $_GET['b'], $_GET['c'])) {
    // Передаем данные из формы напрямую в функцию
    $result = getTriangleArea($_GET['a'], $_GET['b'], $_GET['c']);
    
    echo "<p>Площадь треугольника: <strong>" . round($result, 2) . "</strong></p>";
}
?>
<h1>Задание 3 - наибольший делитель числа</h1>
<form method="GET">
    <p>Введите целое число: <input type="number" name="num" required></p>
    <button type="submit">Найти делитель</button>
</form> 
<?php
// Объявляем функцию с одним параметром $n
function getLargestDivisor($n)
{
    // Берем модуль числа, чтобы код работал и для отрицательных чисел
    $n = abs($n);

    // Для 0 и 1 нет делителей меньше их самих
    if ($n <= 1) {
        return 0;
    }

    // Заводим переменную для хранения ответа (1 является делителем любого числа)
    $maxDivisor = 1;

    // Идем обычным циклом от 2 вверх до половины числа, $i++ увеличивает счетчик 
    for ($i = 2; $i <= intdiv($n, 2); $i++) {
        // Если число делится на $i без остатка
        if ($n % $i === 0) {
            // Перезаписываем переменную новым, более крупным делителем
            $maxDivisor = $i;
        }
    }

    // После окончания цикла возвращаем последний (наибольший) найденный делитель
    return $maxDivisor;
}

// Проверяем, было ли отправлено число из формы
if (isset($_GET['num'])) {
    // Преобразуем строку в целое число
    $number = (int)$_GET['num'];
    
    // Вызываем функцию и выводим результат
    $result = getLargestDivisor($number);
    echo "<p>Наибольший делитель числа $number: <strong>$result</strong></p>";
}
?>
<h1>Задание 4 - нахождения всех делителей числа</h1>
form method="GET">
    <!-- Поле для ввода целого числа. name="num" связывает его с $_GET['num'] -->
    <p>Введите число: <input type="number" name="num" required></p>
    <!-- Кнопка отправки формы -->
    <button type="submit">Найти</button>
</form>
<?php
// Объявляем функцию с одним параметром $n
function getAllDivisors($n)
{
    // Берем модуль числа
    $n = abs($n);
    
    // Создаем пустой массив для делителей
    $divisors = [];

    // Перебираем все числа от 1 до $n включительно
    for ($i = 1; $i <= $n; $i++) {
        // Если делится без остатка — добавляем число в массив
        if ($n % $i === 0) {
            $divisors[] = $i;
        }
    }

    // Возвращаем массив с делителями
    return $divisors;
}

// Проверяем, была ли отправлена форма
if (isset($_GET['num'])) {
    // Вызываем функцию и сохраняем полученный массив в переменную $result
    $result = getAllDivisors((int)$_GET['num']);
    
    echo "<p>Делители: <strong>";
    
    // Проходим по каждому элементу массива $result с помощью цикла foreach
    foreach ($result as $item) {
        // Выводим очередной делитель и пробел после него
        echo "$item ";
    }
    
    echo "</strong></p>";
}
?>