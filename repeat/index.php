<?php

// Типи даних
$int = 123; // число без дробової частини

$float = 3.14; // число з комою

$string = 'Hello'; //  просто рядок

$bool = true & false;

$array = [1, 3.14, 'hello', true, null]; // масив включає в себе всі типи даних


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


//  Функціх для рядків

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
$break = explode(' ', $flowers);   //розбиває рядок на масив
print_r($break);


echo strlen('Bella!') . PHP_EOL;  // повертає довжину рядка

echo strpos('Cat BOB!' , 'Cat') . PHP_EOL; //шукає певний слово у рядку


$world = 'Hello Robin!'; //повертає рядок у верхньому регістрі
echo strtoupper($world) . PHP_EOL;


$city = 'LOS ANGELES!'; //повертає рядок у нижньому регістрі
echo strtolower($city) . PHP_EOL;


$color = 'red, yellow, blue, green';
echo str_replace('blue' , 'violet' , $color) . PHP_EOL;   //змінює деякі символи іншими символами в рядку


$palindromes = 'level';  //обертає рядок у зворотньому напрямку
echo strrev($palindromes) . PHP_EOL;


$delete = '   Hello world!   ';  //видаляє пробіли
echo trim($delete);








































