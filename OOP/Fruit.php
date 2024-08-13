<?php

class Fruit
{

    public string $name;
    public string $color;



    function set_name($name): void
    {
        $this->name = $name;
    }

    function get_name(): string
    {
        return $this->name;
    }

    function set_color($color): void
    {
        $this->color = $color;
    }

    function get_color(): string
    {
        return $this->color;
    }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo 'Name: ' . $apple->get_name() . PHP_EOL;
echo 'Color: ' . $apple->get_color();

