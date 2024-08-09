<?php
$filePage = 'file/example.txt';

if (file_exists($filePage)) {
    unlink($filePage);
    echo "Файл $filePage видалено";
} else {
    echo "Файл $filePage не знайдено";
}
