<?php

// метод toString викликається коли потрібно перетворити обʼєкт у рядок
class Car
{
    private string $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function __toString(): string
    {
        return "Це автомобіль моделі: $this->model";
    }
}

$car = new Car('Tesla');
echo $car;