<?php
//Принцип розділення інтерфейсів - краще зробити багато інтерфейсів ніж один великий, універсальний,
// тоді класи використовуватимуть тільки ті як їм потрібні

//поганий приклад, тому що машина тих часів не могла відтворювати музику але вимушена реалізувати метод
interface EngineBad
{
    public function startEngine();

    public function playMusic();
}

class Car80x implements EngineBad
{
    public function startEngine(): void
    {
        echo 'Двигун машини запустився';
    }

    public function playMusic(): void
    {
        echo 'Машина не може відтворювати музику';
    }
}

$car80x = new Car80x();
$car80x->playMusic();
$car80x->startEngine();




//Хороший приклад
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