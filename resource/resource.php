<?php
$file = 'resource/resource.php';

$a = fopen($file, 'r+');
//функція перевіряє тип ресурсу
echo get_resource_type($a); //виведе stream, який використовується для читання або запису даних
fclose($a);


//функція перевіряє чи є змінна ресурсом
$b = fopen($file, 'r+');
if (is_resource($b)) {
    echo "змінна $b є ресурсом ";
    fclose($b);
} else {
    echo "Змінна $b не є ресурсом";
}


//функція повертає унікальний індекс ресурсу
$c = fopen($file, 'r+');
if ($c){
    $resourceId = get_resource_id($c);
    echo 'Ідентифікатор ресурсу' . $resourceId;
    fclose($c);
} else {
    echo 'Невдалось відкрити файл';
}