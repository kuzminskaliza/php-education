<?php
//$homepage = file_get_contents('file/text.txt');
//$homepage .= 'one more line';
//file_put_contents('file/text1.txt', $homepage);
//echo $homepage;


$filePage = 'file/example.txt';

$file = fopen($filePage, 'w');
$txt = 'Це приклад тексту';
fwrite($file, $txt);
fclose($file);

$file = fopen($filePage, 'r');
$read = fread($file, filesize($filePage));
fclose($file);
echo $read;



