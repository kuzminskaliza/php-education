<?php
echo "hello";
echo 'hello';


$x = "John";
echo "Hello $x";


//!
echo strlen('Hello world!');


//підраховує кількість слів у рядку
echo str_word_count('Hello world!');


//шукає певний текст у рядку
echo strpos('Hello world!' , "world!");


//повертає рядок у верхньому регістрі
$y = 'Hello World!';
echo strtoupper($y);


//повертає рядок у нижньому регістрі
$t = 'Hello World!';
echo strtolower($t);


//змінює деякі символи іншими символами в рядку
$w = 'Hello world!';
echo str_replace('world' , 'dolly' , $w);


//обертає рядок
$d = 'Hello world!';
echo strrev($d);


//видаляє пробіли
$k = 'Hello world!';
echo trim($k);


//розбиває рядок на масив
$i = 'Hello world!';
$s = explode(' ', $i);

print_r($s);

//. об'єднує два рядки
$u = 'Hello';
$o = 'World';
$h = $u . $o;
echo $h;

