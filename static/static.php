<?php

class Animal
{
    public static string $type = 'Невідома тварина';

    public static function getType(): string
    {
        return self::$type;
    }

    public static function getSound(): string
    {
        return 'Тварина робить якийсь звук';
    }

    public static function describe(): string
    {
        return static::getSound() . ' ' . static::$type;
    }
}


class Dog extends Animal
{
    public static string $type = 'Собака';

    public static function getSound(): string
    {
        return 'Гав';
    }
}

class Cat extends Animal
{
    public static string $type = 'Кіт';

    public static function getSound(): string
    {
        return 'Мяяу';
    }
}

class Zoo
{
    private static ?Zoo $instance = null;

    private function __construct()
    {
        echo 'Зоопарк створено' . PHP_EOL;
    }

    public static function getInstance(): Zoo
    {
        if (self::$instance == null) {
            self::$instance = new Zoo();
        }
        return self::$instance;
    }


}

echo Animal::getType() . PHP_EOL;
echo Animal::getSound() . PHP_EOL;

echo Cat::getType() . PHP_EOL;
echo Cat::getSound() . PHP_EOL;
echo Cat::describe() . PHP_EOL;

$zoo1 = Zoo::getInstance();
$zoo2 = Zoo::getInstance();

var_dump($zoo1 === $zoo2);
