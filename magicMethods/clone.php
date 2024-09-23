<?php
//Викликається при клонуванні обʼєкта

class Plant
{
    public $kind;

    public function __construct($kind)
    {
        $this->kind = $kind;
    }

    public function __clone(): void
    {
        echo "Рослина $this->kind була клонована";
    }
}

$plant = new Plant('Троянда');
$plant2 = clone $plant;