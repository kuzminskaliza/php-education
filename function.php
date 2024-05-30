<?php
$a = 0;

if (empty($a)) {
    echo 'Variable "a" is empty'; // функція перевіряє чи змінна є порожньою
}

if (isset($a)) {
    echo 'Variable "a" is set'; // перевіряє чи встановленна змінна, чи вона не є порожньою і що вона не має значення null
}


//функція is_bool перевіряє чи є змінна логічним значенням і повертає 1
$c = true;
echo 'c is ' . is_bool($c);

$d = false;
echo 'd is ' . is_bool($d);


//функція is_float перевіряє чи є змінна float інакше повертає false
$a = 32;
echo 'a is ' . is_float($a); //false

$b = 0;
echo 'b is ' . is_float($b); //false

$c = 32.5;
echo 'c is ' . is_float($c); //true

$d = '32';
echo 'd is ' . is_float($d); //false

$e = true;
echo 'e is ' . is_float($e); //false

$f = 'null';
echo 'f is ' . is_float($f); //false

$g = 1.e3;
echo 'g is ' . is_float($g); //true


//функція перевіряє чи є змінна числом інакше повертає false
$a = 32;
echo 'a is ' . is_int($a); //true

$b = 0;
echo 'b is ' . is_int($b); //true

$c = 32.5;
echo 'c is ' . is_int($c); //false

$d = '32';
echo 'd is ' . is_int($d); //false

$e = true;
echo 'e is ' . is_int($e); //false

$f = 'null';
echo 'f is ' . is_int($f); //false


//перевіряє чи є змінна null
$a = 0;
echo 'a is ' . is_null($a); //false

$b = null;
echo 'b is ' . is_null($b); //true

$c = 'null';
echo 'c is ' . is_null($c); //false


//перевіряє чи є тип змінної string
$a = 'Hello';
echo 'a is ' . is_string($a); //true

$b = 0;
echo 'b is ' . is_string($b); //false

$c = 32;
echo 'c is ' . is_string($c); //false

$d = '32';
echo 'd is ' . is_string($d); //true

$e = true;
echo 'e is ' . is_string($e); //false

$f = 'null';
echo 'f is ' . is_string($f); //true

$g = '';
echo 'g is ' . is_string($g); //true


//видаляє змінну
$a = 'Hello world!';
echo 'The value of variable "a" before unset:' . $a;
unset($a);
echo 'The value of variable "a" after unset:';


//перевіряє чи змінна є масивом
$a = 'Hello';
echo 'a is ' . is_array($a); //false

$b = array('red', 'green', 'blue'); //true
echo 'b is ' . is_array($b);

$c = array('Peter'=>'35', 'Ben'=>'37', 'Joe'=>'43'); //true
echo 'c is ' . is_array($c);

$d = 'red, green, blue';
echo 'd is ' . is_array($d); //false



