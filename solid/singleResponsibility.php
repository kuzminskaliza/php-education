<?php
//Кожен клас повинен відповідати за одну задачу

/**
 *
 */
class Car
{
    /**
     * @var string
     */
    private string $model;
    /**
     * @var int
     */
    private int $years;

    /**
     * @param $model
     * @return void
     */
    public function setModel($model): void
    {
        $this->model = $model;
    }

    /**
     * @param $years
     * @return void
     */
    public function setYears($years): void
    {
        $this->years = $years;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
       return $this->model;
    }

    /**
     * @return int
     */
    public function getYears(): int
    {
        return $this->years;
    }

    /**
     * @return void
     */
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
