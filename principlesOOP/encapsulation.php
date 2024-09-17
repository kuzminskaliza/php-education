<?php
//Інкапсуляція - це приховування внутрішньої реалізації обʼєкта та надання доступу до даних і методів лише через публічні інтерфейси

class Car
{
    private $color;

    public function setColor($color): void
    {
       $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$car = new Car();
$car->setColor('Blue');
echo $car->getColor();

$car->color = 'red'; //спроба поміняти колір, виведе помилку
echo $car->getColor();
