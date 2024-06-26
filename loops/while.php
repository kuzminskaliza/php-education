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