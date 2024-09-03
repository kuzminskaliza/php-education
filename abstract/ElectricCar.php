<?php


require_once('Transport.php');

/**
 *
 */
class ElectricCar extends Transport
{

    /**
     * @return string
     */
    function startEngine(): string
    {
        return "електричний двигун {$this->getCarInfo()} активовано";
    }
}
$tesla = new ElectricCar('Tesla', 'White', 2024, 'Model S');
echo $tesla->startEngine();