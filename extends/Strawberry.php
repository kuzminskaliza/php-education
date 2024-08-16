<?php

require_once 'Fruits.php';

/**
 *
 */
class Strawberry extends Fruits
{
    /**
     * @var float
     */
    public float $weight;

    /**
     * @param string $name
     * @param string $color
     * @param float $weight
     */
    public function __construct(string $name, string $color, float $weight)
    {
        parent::__construct($name, $color);
        $this->weight = $weight;
    }

    /**
     * @return void
     */
    public function getInfo(): void
    {
        parent::getInfo();
        echo PHP_EOL.  "Weight: $this->weight";
    }

}

$strawberry = new Strawberry('strawberry', 'red', 0.2);
$strawberry->getInfo();
