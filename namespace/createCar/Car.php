<?php

namespace createCar;

use components\Body;
use components\Engine;
use components\Wheels;

class Car
{
    private Body $body;
    private Engine $engine;
    private Wheels $wheels;

    public function __construct(Body $body, Engine $engine, Wheels $wheels)
    {
        $this->body = $body;
        $this->engine = $engine;
        $this->wheels = $wheels;
    }

    public function createCar(): void
    {
        echo 'Збираємо автомобіль...' . PHP_EOL;
        echo $this->body->getDetails() . PHP_EOL;
        $this->engine->testStartEngine() . PHP_EOL;
        $this->wheels->addWheels() . PHP_EOL;
        echo 'Автомобіль готовий!' . PHP_EOL;
    }

}