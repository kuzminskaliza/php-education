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

    public function charging(): void
    {
        echo 'Заряджання електомобіля';
    }
}
$electricCar = new ElectricCars();
$electricCar->horn();
$electricCar->charging();
