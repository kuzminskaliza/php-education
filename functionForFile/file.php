<?php
$file = 'test.txt';

// приймає string, виводить bool
$a = fopen($file, 'r+');
fclose($a);


// перевіряє чи існує файл якщо існує виведе 1 або true  якщо не існує виводить 0
echo file_exists('test.txt');


////записує в існуючий файл текст, якщо файл не існує то створює файл і запише туди текст
file_put_contents($file, 'Hello World!');


//видаляє файл
unlink($file);


//читає файл і виводить його вміст
$a = file_get_contents($file);
echo $a;


// виводить масив з файлів і папок по вказаному шляху
//приймає string виводить масив
$directory = '/var/www/php-education/functionForFile';
$files = scandir($directory);
print_r($files);

//перевіряє чи є папкою, виводить bool
var_dump(is_dir($file));


//повертає назву файлу, приймає string та виводить string
echo basename($file);


//читає і виводить файл як рядок, можу приймати string, bool, int, NULL. А повертає або string або bool
$a = file_get_contents($file);
echo $a;