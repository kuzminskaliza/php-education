<?php
// Залежності повинні бути на абстакції

/**
 *
 */
interface Engine
{
    /**
     * @return void
     */
    public function start(): void;

}

/**
 *
 */
class ElectricEngine implements Engine
{
    /**
     * @return void
     */
    public function start(): void
    {
        echo 'Електичний двигун запустився';
    }
}

/**
 *
 */
class GasolineEngine implements Engine
{
    /**
     * @return void
     */
    public function start(): void
    {
        echo 'Бензиновий двигун запустився';
    }
}

/**
 *
 */
class Car
{
    /**
     * @var Engine
     */
    private Engine $engine;

    /**
     * @param Engine $engine
     */
    public function __construct(Engine $engine)
    {
        $this->engine = $engine;
    }

    /**
     * @return void
     */
    public function startCar(): void
    {
        $this->engine->start();
    }
}

$electricCar = new Car(new ElectricEngine());
$electricCar->startCar();;

$gasolineCar = new Car(new GasolineEngine());
$gasolineCar->startCar();
