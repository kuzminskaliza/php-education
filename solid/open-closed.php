<?php
//Клас має бути відкритим для розширення але закритий для модифікацій
//Це означає що можна додавати новий функціонал але не міняти існуючий код

/**
 *
 */
interface Car
{
    /**
     * @return void
     */
    public function startEngine(): void;
}

/**
 *
 */
class Tesla implements Car
{
    /**
     * @return void
     */
    public function startEngine(): void
    {
        echo 'Двигун Tesla запустився безшумно' . PHP_EOL;
    }
}

/**
 *
 */
class Volvo implements Car
{
    /**
     * @return void
     */
    public function startEngine(): void
    {
        echo 'Двигун машини Volvo запустився зі звуком';
    }
}

class Start
{
    public function startCar(Car $car): void
    {
        $car->startEngine();
    }
}

$start = new Start();

$tesla = new Tesla();
$volvo = new Volvo();

$start->startCar($tesla);
$start->startCar($volvo);