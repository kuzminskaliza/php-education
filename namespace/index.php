<?php


require_once 'vendor/autoload.php';

use components\Body;
use components\Engine;
use components\Wheels;
use createCar\Car;

$body = new Body('Tesla', 'white', '2024');
$engine = new Engine();
$wheels = new Wheels();

$car = new Car($body, $engine, $wheels);
$car->createCar();
