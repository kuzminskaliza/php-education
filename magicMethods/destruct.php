<?php

//Деструктор викликається коли обʼєкь знищено
class Car
{
    public string $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function __destruct()
    {
        echo "Машину знищено: $this->model" . PHP_EOL;
    }
}

$object = new Car('Tesla');
unset($object);