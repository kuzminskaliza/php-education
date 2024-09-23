<?php
// Викликається перед серіалізацією обʼєкта

class Car
{
    public $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function __sleep(): array
    {
        echo "Автомобіль готується до серіалізації";
        return ['model'];
    }
}

$car = new Car('Tesla');
serialize($car);
