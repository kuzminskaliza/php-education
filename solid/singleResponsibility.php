<?php
//Кожен клас повинен відповідати за одну задачу

class Car
{
    private string $model;
    private int $years;

    public function setModel($model): void
    {
        $this->model = $model;
    }
    public function setYears($years): void
    {
        $this->years = $years;
    }

    public function getModel(): string
    {
       return $this->model;
    }

    public function getYears(): int
    {
        return $this->years;
    }
    public function startEngine(): void
    {
        echo 'Запускаємо двигун';
    }
}

$car = new Car();
$car->setModel('model X');
echo $car->getModel();
$car->setYears(2024);
echo $car->getYears();
$car->startEngine();
