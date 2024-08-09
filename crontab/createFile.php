<?php

$dir = '/var/www/php-education';

$a = scandir($dir);

$file = implode(PHP_EOL, array_diff($a, ['.', '..'])) . PHP_EOL;

$date = date('Y-m-d');


$path = "/var/www/php-education/crontab/createFileCron/$date.txt";

file_put_contents($path, $file);

echo $path;



