<?php
//спочатку виконується потім перевіряється умови навіть якшо умови хибні
$i = 1;

do {
    echo $i;
    $i++;
} while ($i < 6);


$i = 0;

do {
    $i++;
    if ($i == 3) continue;
    echo $i;
} while ($i < 6);


$i = 1;

do {
    if ($i == 3) break;
    echo $i;
    $i++;
} while ($i < 6);


$i = 0;

do {
    $i++;
    if ($i == 3) continue;
    echo $i;
} while ($i < 6);

$r = 10;
do {
    echo 2 . PHP_EOL;
    $r++;
} while ($r < 10);

$number = 5;
do {
    echo "Value of number is: $number\n";
    $number++;
} while ($number <= 9);