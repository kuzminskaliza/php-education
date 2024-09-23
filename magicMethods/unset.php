<?php

//метод unset  викликається при видаленні неіснуючих властивостей
class Plant
{
    private $attr = ['species' => 'lily'];

    public function __unset(string $name): void
    {
        unset($this->attr[$name]);
        echo "Вастивість $name видалена";
    }
}

$plant = new Plant();
unset($plant->species);