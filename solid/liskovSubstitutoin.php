<?php
//Підклас повинен поводитися так само як і базовий клас і його можна використовувати замість базового класу без порушення логіки

/**
 *
 */
class Car
{
    /**
     * @return void
     */
    public function startEngine(): void
    {
        echo 'Двигун запустився';
    }
}

/**
 *
 */
class ElectricCar extends Car
{
    /**
     * @return void
     */
    public function startEngine(): void
    {
        echo 'Електричний двигун запустився';
    }
}

/**
 * @param Car $car
 * @return void
 */
function testCar(Car $car): void
{
    $car->startEngine();
}

$car = new ElectricCar();
testCar($car);
