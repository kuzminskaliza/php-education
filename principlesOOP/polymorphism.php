<?php
//Поліморфізм - це здатність обєктів різних класів по різному використовувати одні і ті ж самі методи

interface Vehicle
{
    public function run();
}


class Tesla implements Vehicle
{
    public function run()
    {
        echo '';
    }
}


class Volvo implements Vehicle
{
    public function run()
    {
        echo 'brr';
    }
}


class Car
{
    public function test(Vehicle $vehicle)
    {
        $vehicle->run();
    }
}


$car = new Car();
$car->test(new Tesla());
$car->test(new Volvo());
