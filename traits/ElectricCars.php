<?php

use traits\Horn;

require_once('Horn.php');

class ElectricCars
{
    use Horn;
    public array $electrics = [];
    public array $electric1 = [];
    public array $electric2 = [];
    public array $electric3 = [];
    public array $electric4 = [];
    public array $cars = [];
    public array $cars1 = [];
    public array $cars2 = [];
    public array $cars3 = [];
    public array $cars4 = [];

    public function charging(): void
    {
        echo 'Заряджання електомобіля';
    }

    public function addCar(Car $car): void
    {
        $this->cars[] = $car;
    }
}
$electricCar = new ElectricCars();
$electricCar->horn();
$electricCar->charging();
