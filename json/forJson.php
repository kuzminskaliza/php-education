<?php
$a = file_get_contents('json/data.json');
//var_dump($a);
$data = json_decode($a, true);
//var_dump($data);

$age = [
    'liza' => 20,
    'Sophia' => 13,
    'Rostik' => 12
];

echo json_encode($age);

