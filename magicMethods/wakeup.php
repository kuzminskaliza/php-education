<?php

//Використовується для відновлення обєкта після десеріалізації
class Car
{
    public string $model;
    private string $connection;

    public function __construct($model)
    {
        $this->model = $model;
        $this->connectToDatabase();
    }

    private function connectToDatabase(): void
    {
        $this->connection = 'Зʼєднання з базою даних встановленно';
        echo "Підключення до бази даних для моделі $this->model" . PHP_EOL;
    }


    public function __wakeup(): void
    {
        echo "Десеріалізація автомобіля $this->model" . PHP_EOL;
        $this->connectToDatabase();
    }
}


$car = new Car('Tesla');
$serializedCar = serialize($car);

$unserializedCar = unserialize($serializedCar);
