<?php
$cars = ['Volvo', 'BMW', 'Toyota'];
echo count($cars); //підраховує кількість елементів в масиві

foreach ($cars as $key => $value){
    echo $key . '-' . $value; //щоб відобразити всі елементи масиву
}

$fruits = ['Apple', 'Banana', 'Orange'];
$fruits[] = 'Cherry';
var_dump($fruits);

$cars = ['brand' => 'ford', 'model' => 'mustang'];
$cars['color'] = 'red';

$fruits = ['Apple', 'Banana', 'Cherry'];
array_push($fruits, 'Orange', 'Kiwi');
var_dump($fruits);

$cars = ['brand' => 'ford', 'model' => 'mustang'];
$cars += ['color' => 'red', 'year' => 1964];

$cars = ['Volvo', 'BMW', 'Toyota'];
unset($cars[1]);
var_dump($cars);


$cars = ['Volvo', 'BMW', 'Toyota'];
sort($cars);
$clength = count($cars);
for ($x = 0; $x < $clength; $x++){
    echo $cars[$x];
}


$arr = [];
$arr[] = 'Liza';
$arr[] =  'Serhii';
$arr[] =  'Anastya';
var_dump($arr);
unset($arr[1]);
var_dump($arr);
$arr[0] ='Eliza';
var_dump($arr);
$arr2 = ['Rostik', 'Sonya'];
$union = array_merge($arr, $arr2);
var_dump($union);
foreach ($union as $key => $value){
    echo $key . '-' . $value . PHP_EOL;
}

