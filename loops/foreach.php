<?php
$colors = [
    'red',
    'green',
    'blue',
    'yellow'
];

foreach ($colors as $x) {
    echo $x .PHP_EOL;
}


$members = [
    'Peter' => '35',
    'Ben' => '37',
    'Joe' => '43'
];

foreach ($members as $x => $y) {
    echo $x . ' : ' . $y .PHP_EOL;
}


$color = [
    'red',
    'green',
    'blue',
    'yellow'
];

foreach ($color as $x) {
    if ($x == 'blue') {
        break;
    }
    echo $x .PHP_EOL;
}


$color = [
    'red',
    'green',
    'blue',
    'yellow'
];

foreach ($color as $x) {
    if ($x == 'blue') {
        continue;
    }
    echo $x .PHP_EOL;
}
