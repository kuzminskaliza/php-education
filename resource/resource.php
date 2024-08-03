<?php
$file = 'resource/resource.php';

$a = fopen($file, 'r+');
//функція перевіряє тип ресурсу
echo get_resource_type($a); //виведе stream, який використовується для читання або запису даних
fclose($a);

