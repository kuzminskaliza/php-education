<?php

// Метод isset викликається при перевірці існування властивостей
class Car
{
    private array $properties = [
        'color' => 'red'
    ];

    public function __isset(string $name): bool
    {
        return isset($this->properties[$name]);
    }

}

$car = new Car();
var_dump(isset($car->color));
var_dump(isset($car->speed));
