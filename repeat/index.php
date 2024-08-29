<?php

                // Типи даних
$int = 123; // число без дробової частини

$float = 3.14; // число з комою

$string = 'Hello'; //  просто рядок

$bool = true;
$bool1 = false;

$array = [1, 3.14, 'hello', true, null]; // масив включає в себе всі типи даних

$null = null; //тип даних який немає значення

$resource = fopen('repeat/text.txt', 'r+'); //тип даних який відкриває зовнішній ресурс

//$object = new Car(); // є екземпляром класу

// Оператори
// || - це або
// ! - це 'не'
// && - це і
// + - це обєднання
// === - це оператор порівняння
// == - це прирівнювання
// != - не дорівнює
// !== - є оператором нерівності

//тернарний оператор - короткий запис if-else

$age = 20;
$message = ($age >= 18) ? 'Дорослий' : 'Дитина';
echo $message . PHP_EOL;

$name = null;
$defaultName = 'Гість';

$displayName = $name ?? $defaultName;
echo $displayName . PHP_EOL;

                //Цикли

// while - цикл виконується доти, поки умова є задовільною

$i = 1;
while ($i <= 5) {
    echo $i . PHP_EOL;
    $i++;
}

// do while - умова виконається хоча б один раз, навіть якщо умова не є істиною

do {
    echo $i . PHP_EOL;
    $i++;
} while ($i <= 5);

//foreach - використовується тільки для масивів

$fruits = ['cherry', 'banana', 'strawberry', 'kiwi', 'lime'];

foreach ($fruits as $fruit) {
    echo $fruit . PHP_EOL;
}


//for - виконує умову задану кількість разів

for ($x = 0; $x <= 10; $x++) {
    echo "Число $x \n";
}

                //Функції для масивів

$arrayExample = [1, 2, 3, 4];


$arrayExample[] = 5; //замість array_push
print_r($arrayExample);

$lastElement = array_pop($arrayExample);     // Видаляє останній елемент масиву
print_r($arrayExample);
echo $lastElement;


$firstElement = array_shift($arrayExample);  //  Видаляє перший елемент
print_r($arrayExample);
echo $firstElement;


array_unshift($arrayExample, 14);  //  додає елемент на початок масиву
print_r($arrayExample);

$a = ['hello', 49, 0.9, 123];
$merge = array_merge($arrayExample, $a); // обʼєднує два масиви в один
print_r($merge);


$array = [1, 2, 3, 4, 5];
$slice = array_slice($array, 1, 3); //
print_r($slice); // [2, 3, 4]


                //Функціх для рядків

$a = strlen('Hello');  //повертає довжину рядка


//count()  повертає кількість елементів в масиві
$cars = ['Tesla', 'Toyota', 'Ford'];
echo count($cars);


//implode() обʼєднує елементи масиву в рядок
$arr = ['banana', 'cherry', 'apple'];
$string = implode(', ', $arr); // потрібно вказати роздільник щоб потім вийшов масив
echo $string;


//explode() розбиває рядок на масив
$country = 'city, town, village';
$array = explode(', ', $country);
var_dump($array);


$flowers = 'rose, dandelion, lily';
$break = explode(',', $flowers);   //розбиває рядок на масив
print_r($break);


echo strlen('Bella!') . PHP_EOL;  // повертає довжину рядка

echo strpos('Cat BOB', 'O') . PHP_EOL; //шукає певний символ у рядку


$world = 'Hello Robin!'; //повертає рядок у верхньому регістрі
echo strtoupper($world) . PHP_EOL;


$city = 'LOS ANGELES!'; //повертає рядок у нижньому регістрі
echo strtolower($city) . PHP_EOL;


$color = 'red, yellow, blue, green';
echo str_replace('blue', 'violet', $color) . PHP_EOL;   //змінює деякі символи іншими символами в рядку


$palindromes = 'level';  //обертає рядок у зворотньому напрямку
echo strrev($palindromes) . PHP_EOL;


$delete = '   Hello world!   ';  //видаляє пробіли
echo trim($delete);


                //Загальні функції

$number = 3.2478;
$round = round($number, 1); //округлює цифру після коми
echo $round . PHP_EOL;

$rand = rand(1, 100); //обирає будь яке число
echo $rand . PHP_EOL;

$arrayNumber = [1, 3, 53, 26, 357, 34, 2, 6, 8, 4];
$maxValue = max($arrayNumber); //обирає найбільше число
$minValue = min($arrayNumber); //обрає найменше число
echo $maxValue, $minValue . PHP_EOL;


echo time() . PHP_EOL; // виводить секунди з 1970 року

$data = date('Y-m-d H-i-s'); // виводить дату
echo $data;


                //Функції для файлів

$file = "repeat/text.txt";


//читає файл
readfile($file);
echo "\n";


//відкриває файл
$a = fopen($file, 'r');
fclose($a);// закриває файл


// перевіряє чи існує файл
if (file_exists($file)) {
    echo 'Файл існує';
} else {
    echo 'Файл не існує';
}
echo "\n";


//записує дані у файл
file_put_contents($file, 'Hello World!');
echo "\n";


// читає файл
$content = file_get_contents($file);
echo $content;
echo "\n";

// виводить розмір файлу в байтах
echo filesize($file);
echo "\n";

// вказує шлях до файлу
$pathInfo = pathinfo($file);
print_r($pathInfo);

    //$_POST; передає дані на сервер через HTTP-запит
    //$_SERVER;  зберігає інформацію про сервер і запит користувача.

//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    $username = $_POST['username'];
//    echo 'Hello, ' . $username;
//}

    //$_GET; передає дані через URL-адресу

//$name = $_GET['name'];
//$age = $_GET['age'];
//
//echo 'Name: ' . $name;
//echo 'Age: ' . $age;

    //$_REQUEST; передає дані на сервер через HTTP-запит методом POST GET COOKIE

//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    $name = $_REQUEST['name'];
//    $age = $_REQUEST['age'];
//
//    echo 'Name: ' . htmlspecialchars($name);
//    echo 'Age: ' . htmlspecialchars($age);
//}

    //$_COOKIE; дані зберігаються  на компютері користувача

//setcookie('user', 'Anna', time() + (86400 * 30), '/');
//if (isset($_COOKIE['user'])) {
//    echo 'Cookie user: ' . $_COOKIE['user'];
//} else {
//    echo "Cookie 'user' is not set!";
//}

    //$_SESSION; використовується для зберігання даних між сесіями, дані зберігаються на сервері протягом певного часу

//session_start();
//$_SESSION['user'] = 'Anna';
//
//echo 'Session user: ' . $_SESSION['user'];

    //$_FILES;  зберігає файли які були завантажені через форму

//if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fileToUpload'])) {
//    $fileName = $_FILES['fileToUpload']['name'];
//    $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
//
//    move_uploaded_file($fileTmpName, 'uploads/' . $fileName);
//    echo 'File uploaded: ' . $fileName;
//}


