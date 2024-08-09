<?php
function factorial($n): float|int
{
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1); // рекурсія коли функція викликає сама себе
    }
}

echo factorial(5) . PHP_EOL;


$greeting = 'Hello';
$sayHello = function ($name) use ($greeting) {
    echo "$greeting ", "$name" . PHP_EOL;
};
$sayHello('World'); // замикання функції які можуть посилатись на змінні з області видимості


//function sumAll()
//{
//    $numArgs = func_num_args();
//    $args = func_get_args();
//
//    $sum = 0;
//    foreach ($args as $arg) {
//        $sum += $arg;
//    }
//return $sum;
//}
//echo sumAll(1, 2, 3, 4) . PHP_EOL;
//echo sumAll(100, 60) . PHP_EOL;

function sumAll(...$numbers): int
{
    return array_sum($numbers);
}

echo sumAll(1, 2, 3, 4) . PHP_EOL;
echo sumAll(10, 20) . PHP_EOL;

$increment = function (&$value) {
    $value++;
};

$count = 1;
$increment($count);
echo $count . PHP_EOL; // передача даних через знак &


//function userConnect($db)
//{
//    return function ($user) use ($db){
//        echo $user . 'connected to the base' . $db;
//    };
//}
//
//$db = userConnect(' new base');
//
//$db('Masha ');


function userConnect($db, $user, $callback): void
{
    $c = $user . 'connected to the base ' . $db . PHP_EOL;

    $callback($c);
}

userConnect('new Base ', 'MAsha ', function ($answer) {
    echo 'dlgk' . $answer;
});


$glob = 'Masha';
function foo(): void
{
    global $glob;
    var_dump($glob);
}


$name = 'Masha';
function reName1($newName, &$innrerNAme, &$other = false): string
{
    $innrerNAme = $newName;
    echo $innrerNAme;
    $other = 'HELLO';
    return 'WORLD';
}

reName1('Olga', $name, $other);

echo $name . PHP_EOL;
var_dump($other);

//рекурсія коли функція у функції
function recursiya($counter): void
{
    if ($counter > 0) {
        echo ($counter--) . PHP_EOL;
        recursiya($counter);
    } else return;
}

recursiya(8);


function first(): string
{
    return 'First function';
}

function second(): string
{
    return 'Second function';
}

$newFunction = rand(0, 1) ? 'first' : 'second';

echo $newFunction();


// сортує від меншого до більшого + має анонімну функцію яку можна передати як аргумент в іншу функцію
class Point
{
    public $x;
    public $y;
}

$fst = new Point;
$fst->x = 12;
$fst->y = 5;

$snd = new Point;
$snd->x = 1;
$snd->y = 1;

$tnd = new Point;
$tnd->x = 4;
$tnd->y = 10;

$arr = [$fst, $snd, $tnd];

usort($arr, function ($a, $b) {
    $dist_a = sqrt($a->x ** 2 + $a->y ** 2);
    $dist_b = sqrt($b->x ** 2 + $b->y ** 2);
    return $dist_a <=> $dist_b;
});

print_r($arr);

//замикання тільки в анонімних функціях
$message = 'Text message';
$mFu = function () use ($message) {
    $message = 'New';
    return $message;
};
echo $mFu() . PHP_EOL;
echo $message . PHP_EOL;


function odd(int $number): bool
{
    if ($number % 2 == 0) {
        return false;
    } else {
        return true;
    }
}

echo odd(5);

function sum(...$items)
{
    $sum = 0;
    for ($i = 0; $i < count($items); $i++) {
        $sum += $items[$i];
    }
    return $sum;
}

echo sum(10, 5, 2, 3, 2, 4, 5);


