<?php
$colors = [
    'red',
    'green',
    'blue',
    'yellow'
];

foreach ($colors as $x) {
    echo $x . " ";
}


$members = [
    'Peter' => '35',
    'Ben' => '37',
    'Joe' => '43'
];

foreach ($members as $x => $y) {
    echo $x . " : " . $y;
}


$color = [
    'red',
    'green',
    'blue',
    'yellow'
];

foreach ($color as $x) {
    if ($x == 'blue') break;
    echo $x;
}


$color = [
    'red',
    'green',
    'blue',
    'yellow'
];

foreach ($color as $x) {
    if ($x == 'blue') continue;
    echo $x;
}


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


for ($x = 0; $x <= 10; $x++) {
    echo $x;
}

for ($x = 0; $x <= 100; $x += 10) {
    echo $x;
}