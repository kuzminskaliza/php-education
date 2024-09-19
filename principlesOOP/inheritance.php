<?php
//Наслідування - це створення нового класу на основі іншого успадковуючи їхні методи та властивості
class Vehicle
{
    public $motor;

    public function run(): void
    {
        echo 'brrr';
    }
}

class Tesla extends Vehicle
{
    public function run(): void
    {
        echo '  ';
    }
}

$tesla = new Tesla();
$tesla->run();