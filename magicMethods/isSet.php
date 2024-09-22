<?php
// Метод isset викликається при перевірці існування властивостей
class Car
{
    private $properties = [
        'color' => 'red'
    ];

    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }

}

$car = new Car();
var_dump(isset($car->color));
var_dump(isset($car->speed));
