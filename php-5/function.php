<?php
function myMessage(): void
{
    echo 'Hello world';
}

myMessage();


function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}

echo '5 + 13 =' . sum(5, 13);
echo '34 + 12 =' . sum(34, 12);

function t1(): void
{
    $a = 7;
    echo $a . PHP_EOL;
}

t1();

$b = 22;

function t2(): void
{
    global $b;
    $b = 33;
    echo $b . PHP_EOL;
}

t2();
echo $b . PHP_EOL;


function t5(): void
{
    $f = 100;
    function t6(): void
    {
        $f = 200;
        echo $f;
    }

    echo $f . PHP_EOL;
}

t5();
t6();


$n1 = 5;
$n2 = 4;

function increase(): void
{
    global $n1, $n2;
    if ($n1 > $n2) {
        $t = $n1;
        $n1 = $n2;
        $n2 = $t;
    }
    echo '$n1 = ' . $n1, PHP_EOL;
    echo '$n2 = ' . $n2, PHP_EOL;
}

increase();


//count()  повертає кількість елементів в масиві
$cars = ['BMW', 'Toyota', 'Ford'];
echo count($cars);


//implode() обʼєднує елементи масиву в рядок
$arr = ['banana', 'cherry', 'apple'];
$string = implode(', ', $arr);
echo $string;


//explode() розбиває рядок на масив
$country = 'city, town, village';
$array = explode(', ', $country);
var_dump($array);


//array_merge() обʼєднує два масива в один
$fruits = ['orange', 'kiwi', 'strawberry'];
$vegetables = ['potato', 'tomato', 'cucumber', 'pepper'];
$merge = array_merge($vegetables, $fruits);
var_dump($merge);


//array_keys() повертає всі або деякі ключі масиву, і шукає ключі за їх значенням
$numbers = [
    0 => 12,
    1 => 10,
    2 => 12,
    3 => 13,
    4 => 15
];
$keys = array_keys($numbers, 12);
var_dump($keys);


//array_key_exist()  перевіряє чи існує ключ в масиві
$array1 = [
    'name' => 'John',
    'age' => '35',
    'email' => 'john@gmail.com'
];
if (array_key_exists('age', $array)) {
    echo 'Key "age" exist in the array';
} else {
    echo 'Key "age" does not exist in the array';
}


//array_map() виконує певну дію з кожним елементом масиву
function number($n): int
{
    return $n * $n;
}

$arr = [1, 3, 5, 2, 7];
var_dump(array_map('number', $arr));


//array_diff() порівнює значення масивів і повертає їх відмінності
$a1 = [
    'a' => 'red',
    'b' => 'green',
    'c' => 'blue',
    'd' => 'yellow'
];
$a2 = [
    'e' => 'red',
    'f' => 'green',
    'g' => 'blue'
];

$result = array_diff($a1, $a2);
var_dump($result);


//array_intersect() порівнює значення і повертає збіги
$result1 = array_intersect($a1, $a2);
var_dump($result1);


//array_values() повертає значення масиву
$arrayValues = [
    'name' => 'John',
    'age' => '35',
    'email' => 'john@gmail.com'
];
$value = array_values($arrayValues);
var_dump($value);


//array_flip() повертає всі ключі і їх значення в масиві
$keyAndValue = array_flip($a1);
var_dump($a1);


//array_chunk() розділяє масив на менші масиви
$car = ['volvo', 'BMW', 'tesla', 'ford', 'toyota', 'mercedes', 'honda', 'opel'];
var_dump(array_chunk($car, 2));


//array_column() повертає значення одного стовпця з масиву
$array3 = [
    [
        'id' => '5683',
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
    ],
    [
        'id' => '3747',
        'first_name' => 'Ben',
        'last_name' => 'Smith',
    ],
    [
        'id' => '5257',
        'first_name' => 'Joe',
        'last_name' => 'Doe',
    ],
];
$last_name = array_column($array3, 'last_name');
var_dump($last_name);


//is_array() перевіряє чи є змінна масивом
$c = ['Peter' => '35', 'Ben' => '37', 'Joe' => '43'];
echo 'c is ' . is_array($c) . PHP_EOL;


//is_int() перевіряє чи є змінна числом
$a = 32;
echo 'a is ' . is_int($a) . PHP_EOL;
$b = '32';
echo 'b is ' . is_int($b) . PHP_EOL;


//trim() видаляє пробіли з початку і кінця рядка
$text = '  Hello, world!  ';
echo phptrim($text) . PHP_EOL;


//strlen() визначає кількість символів в рядку або довжину рядка
$text1 = 'Hello, World!';
$length = strlen($text1);
echo $length . PHP_EOL;


//substr() використовується для витягання рядка з заданої позиції
$substring = substr($text1, 7);
echo $substring . PHP_EOL;


//strpos() використовується для знаходження позицій
$position = strpos($text1, 'World');
if ($position !== false) {
    echo 'Підрядок "World" знайдено на позиції: ' . $position . PHP_EOL;
} else {
    echo 'Підрядок "World" не знайдено' . PHP_EOL;
}


//sprintf() повертає відформатованний рядок
$name = 'John';
$age = 30;
$formattedString = sprintf('My name is %s and I am %d years old.', $name, $age);
echo $formattedString . PHP_EOL;


//strtolower() замінює великі літери на маленькі
$text_word = strtolower($text1);
echo $text_word . PHP_EOL;


//ucfirst()  замінює перші букви на маленькі
$text_word = ucfirst($text1);
echo $text_word . PHP_EOL;


//str_replace() замінює одне слово на інше
$search = 'World';
$replace = 'PHP';
$result = str_replace($search, $replace, $text1);
echo $result . PHP_EOL;


///array_unshift() додає елементи на початок масива
$letters = ['b', 'c', 'd'];
array_unshift($letters, 'a');
var_dump($letters);


//array_unique() видаляє однакові значення з масиву
$arrayNumber = [1, 1, 2, 2, 4, 4, 7, 53, 46, 68, 65];
$unique = array_unique($arrayNumber);
var_dump($unique);


//array_search() використовується для пошуку значень у функції
$array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];
$key = array_search('banana', $array);
if ($key !== false) {
    echo 'Ключ знайденого елемента: ' . $key . PHP_EOL;
} else {
    echo 'Значення не знайдено';
}


//array_sum() використовується для обчислення суми значень масиву
$sum = array_sum($arrayNumber);
echo 'Сума: ' . $sum . PHP_EOL;


//Функція для обчислення квадрата числа: Напишіть функцію square($number), яка приймає число і повертає його квадрат.
//echo square(5); // Вивід: 25
function square(int $num): int
{
    return $num * $num;
}

echo phpsquare(5) . PHP_EOL;


//Функція для привітання: Напишіть функцію greet($name), яка приймає ім'я і повертає рядок привітання.
//echo greet("Анна"); // Вивід: Привіт, Анна!

function greet(string $name): string
{
    return 'Привіт, ' . $name;
}

echo phpgreet('Анна!') . PHP_EOL;


//Функція для знаходження максимального значення в масиві: Напишіть функцію findMax($array),
// яка приймає масив чисел і повертає максимальне значення в масиві.
//// Приклад використання
//$numbers = [1, 5, 3, 9, 2];
//echo findMax($numbers); // Вивід: 9
//3-тя задача потребує цикл так як у нас масив і потрібно пройтись по кожному елементу масива і перевірити чи він більший за попередній елемент.
//щоб запамятати попередній елемент необхідно створити змінну до конструкції цикла яка зберігає найбільше значення і в циклі це значення оновлюємо
// якщо воно більше за попереднє

function findMax(array $array): int
{
    $maxValue = $array[0];
    foreach ($array as $value) {
        if ($value > $maxValue) {
            $maxValue = $value;
        }
    }
    return $maxValue;
}

$numbers = [1, 5, 3, 9, 2];
echo findMax($numbers);

