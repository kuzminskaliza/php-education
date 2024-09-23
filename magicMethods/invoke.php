<?php
// метод invoke дозволяє викликати обʼєкт як функцію

class Animal
{
    public function __invoke(string $action): void
    {
        echo "Тварина виконує $action";
    }
}

$animal = new Animal();
$animal('стибок');