<?php
//Абстракція - полягає в тому щоб виділити необхідні характеристики обʼєкта та приховати деталі реалізації
abstract class Vehicle
{
    protected $name;
    protected $model;

    public function __construct($model, $name)
    {
        $this->name = $name;
        $this->model = $model;
    }

    abstract function drive();
}

class Car extends Vehicle
{
    public string $color;
    public function __construct($model, $name, $color)
    {
        parent::__construct($model, $name);
        $this->color = $color;
    }

    public function __toString ()
    {
        return "Car: $this->color, $this->name, $this->model";
    }
    public function drive()
    {
        echo 'brr';
    }
}

$car = new Car('model X', 'Tesla', 'Red');
echo $car;
$car->drive();
