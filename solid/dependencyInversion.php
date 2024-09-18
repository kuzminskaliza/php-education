<?php
// Залежності повинні бути на абстакції

interface Engine
{
    public function start(): void;
}

class ElectricEngine implements Engine
{
    public function start(): void
    {
        echo 'Електичний двигун запустився';
    }
}

class GasolineEngine implements Engine
{
    public function start(): void
    {
        echo 'Бензиновий двигун запустився';
    }
}

class Car
{
    private Engine $engine;

    public function __construct(Engine $engine)
    {
        $this->engine = $engine;
    }
    public function startCar(): void
    {
        $this->engine->start();
    }
}

$electricCar = new Car(new ElectricEngine());
$electricCar->startCar();;

$gasolineCar = new Car(new GasolineEngine());
$gasolineCar->startCar();
