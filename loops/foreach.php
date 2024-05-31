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
