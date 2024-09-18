<?php
//Клієнти не повинні залежити від методів, які вони не використовують

interface Engine
{
    public function startEngine(): void;
}

interface MusicPlayer
{
    public function playMusic(): void;
}

class SuperCar implements Engine, MusicPlayer
{
    public function startEngine(): void
    {
        echo 'Двигун запустився';
    }

    public function playMusic(): void
    {
        echo 'Музика почала грати';
    }
}

class Car implements Engine
{
    public function startEngine(): void
    {
        echo 'Двигун запустився';
    }
}

$superCar = new SuperCar();
$superCar->startEngine();
$superCar->playMusic();

$car = new Car();
$car->startEngine();