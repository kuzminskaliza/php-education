<?php
$file = 'file/test.txt';

//читає файл
readfile($file);
echo "\n";


//відкриває файл
$a = fopen($file, 'r');
fclose($a);// закриває файл


//Відкриває файл читає і виведить кожен рядок з файлу
$a = fopen($file, 'r');
while ($line = fgets($a)){
    echo $line;
}
fclose($a);

//
////читає файл до кінця
//$a = fopen($file, 'r');
//while (!feof($a)){
//    echo fgets($a);
//}
//fclose($a);
//
//
//// читає файл по символу і виводить його вміст
//$a = fopen($file, 'r');
//while (!feof($a)){
//    echo fgetc($a);
//}
//fclose($a);
//
//
//// записує рядок у файл
//$a = fopen($file, 'w');
//fwrite($a, 'Hello World!');
//fclose($a);
//
//
//// перевіряє чи існує файл
//if (file_exists($file)){
//    echo 'Файл існує';
//} else {
//    echo 'Файл не існує';
//}
//echo "\n";
//
//
////записує дані у файл
//file_put_contents($file, 'Hello World!');
//echo "\n";
//
//
//// читає весь файл
//$content = file_get_contents($file);
//echo $content;
//echo "\n";
//
//
////повертає імя файлу
//echo basename($file);
//echo "\n";
//
//
////
//if (is_dir('file')) {
//    echo 'Це папка;)';
//}else {
//    echo 'Це напевне не папка(';
//}
//echo "\n";


//unlink('file/text1.txt');// видаляє файл

//
////переназиває файл
//rename('text1.txt', 'superText.txt');
//
//
//// створює папку
//mkdir('file/newDirectory');
//
//
//// виводить розмір файлу в байтах
//echo filesize('file/superText.txt');
//echo "\n";
//
//
//// перевіряє чи є цу файлом
//if (is_file('file/superText.txt')){
//    echo 'Це файл';
//}else {
//    echo 'Це не файл';
//}
//echo "\n";
//
//
//// вказує шлях до файлу
//$pathInfo = pathinfo('superText.txt');
//print_r($pathInfo);
//
//
//// отримує список папок і файлів
//$files = scandir('file');
//print_r($files);




