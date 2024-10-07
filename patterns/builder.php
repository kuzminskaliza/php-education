<?php

class House
{
    public mixed $walls;
    public mixed $roof;
    public mixed $windows;

    public function show(): void
    {
        echo "Будинок з: $this->walls стіни, $this->roof дах, $this->windows вікна";
    }
}

interface HouseBuilder
{
    public function buildWalls();

    public function buildRoof();

    public function buildWindows();

    public function getResult(): House;
}

class ConcreteHouseBuilder implements HouseBuilder
{
    private House $house;

    public function __construct()
    {
        $this->house = new House();
    }

    public function buildWalls(): void
    {
        $this->house->walls = 'Цегла';
    }

    public function buildRoof(): void
    {
        $this->house->roof = 'Черепиця';
    }

    public function buildWindows(): void
    {
        $this->house->windows = 'Скло';
    }

    public function getResult(): House
    {
        return $this->house;
    }

}

class Director
{
    private mixed $builder;

    public function setBuilder(HouseBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function buildFullHouse(): void
    {
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildWindows();
    }
}

$builder = new ConcreteHouseBuilder();
$director = new Director();
$director->setBuilder($builder);
$director->buildFullHouse();

$house = $builder->getResult();
$house->show();
