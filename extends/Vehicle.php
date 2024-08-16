<?php

/**
 *
 */
class Vehicle
{

    /**
     * @var string
     */
    public string $marca;
    /**
     * @var string
     */
    public string $color;


    /**
     * @param string $marca
     * @param string $color
     */
    public function __construct(string $marca, string $color)
    {
        $this->marca = $marca;
        $this->color = $color;
    }
}


/**
 *
 */
class Cars extends Vehicle
{
    /**
     * @param string $marca
     * @param string $color
     */
    public function __construct(string $marca, string $color)
    {
        parent::__construct($marca, $color);
        $this->marca = 'Volvo';
        $this->color = 'red';

    }
}


/**
 *
 */
final class HyperCar extends Vehicle
{
    /**
     * @return void
     */
    public function run(): void
    {
        echo 'brrr';
    }
}

$car = new Cars('Toyota', 'white');
echo "Car brand: $car->marca, color: $car->color \n";

$hyperCar = new HyperCar('Tesla', 'black');
$hyperCar->run();