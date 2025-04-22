<?php

use traits\Horn;

require_once('Horn.php');

class ElectricCars
{
    use Horn;
    public array $electrics = [];

    public function charging(): void
    {
        echo 'Заряджання електомобіля';
    }
}
$electricCar = new ElectricCars();
$electricCar->horn();
$electricCar->charging();
