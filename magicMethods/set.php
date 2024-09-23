<?php

// Метод set  викликається при присвоєнні значення неснуючій властивості
class Plant
{
    private $data = [];

    public function __set(string $name, mixed $value): void
    {
        $this->data[$name] = $value;
        echo "дані $name встановлено як $value" . PHP_EOL;
    }
}

$plant = new Plant();
$plant->age = '40 років';