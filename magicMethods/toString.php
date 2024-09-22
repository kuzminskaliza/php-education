<?php
// метод toString викликається коли потрібно перетворити обʼєкт у рядок
class Car {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function __toString() {
        return "Це автомобіль моделі: $this->model";
    }
}

$car = new Car('Tesla');
echo $car;