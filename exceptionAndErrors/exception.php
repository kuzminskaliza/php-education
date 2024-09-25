<?php

try {
    $num = 10;
    $denom = 0;

    if ($denom == 0) {
        throw new Exception('ділення на нуль неможливе');
    }
    echo $num/$denom;
} catch (Exception $exception) {
    echo 'Помилка: ' . $exception->getMessage() . PHP_EOL;
}


try {
    $value = -5;

    if ($value < 0) {
        throw new InvalidArgumentException("Значення не може бути відʼємним\n");
    }

    if (!is_numeric($value)) {
        throw new Exception('Не є числом');
    }

    echo sqrt($value);
} catch (InvalidArgumentException $exception) {
    echo 'Помилка: ' . $exception->getMessage();
} catch (Exception $exception) {
    echo 'Загальна помилка: ' . $exception->getMessage() . PHP_EOL;
}


try {
    $file = fopen('exceptionAndErrors/textForException.txt', 'r+');

    if (!$file) {
        throw new Exception('Неможливо відкрити файл');
    }
    echo fread($file, filesize('exceptionAndErrors/textForException.txt'));
} catch (Exception $exception) {
    echo 'Помилка: ' . $exception->getMessage();
} finally {
    if (isset($file)) {
        fclose($file);
        echo ' Файл закритий';
    }
}