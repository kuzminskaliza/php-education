<?php

//Конструктор викликається тоді коли створюється новий обʼєкт
class Car
{
    public string $model;

    public function __construct($model)
    {
        $this->model = $model;
        echo "Обʼєкт створен. Імʼя: $model" . PHP_EOL;
    }
}

$object = new Car('Tesla');