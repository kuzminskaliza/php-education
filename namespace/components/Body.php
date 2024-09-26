<?php
namespace components;
class Body
{
    public string $model;
    public string $color;
    public int $year;

    public function __construct($model, $color, $year)
    {
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;
    }

    public function getDetails(): string
    {
        return "Модель: $this->model, Колір: $this->color, Рік випуску: $this->year";
    }
}