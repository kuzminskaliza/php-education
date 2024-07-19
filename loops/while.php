<?php
$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
}


$i = 0;
while ($i < 100) {
    $i += 10;
    echo $i;
}


$i = 1;
while ($i < 6) {
    if ($i == 3) break;
    echo $i;
    $i++;
}


$i = 0;
while ($i < 6) {
    $i++;
    if ($i == 3) continue;
    echo $i;
}


$r = 0;
while ($r < 10) {
    echo 2 . PHP_EOL;
    $r++;
}

$x = 10;
$y = 0;

while ($y<=10) {
    $y += $x;
    $x += 1;
}
echo "the value of x is: $x\n";
echo "the value of y is: $y\n";

