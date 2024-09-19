<?php
//Абстракція - полягає в тому щоб виділити необхідні характеристики обʼєкта та приховати деталі реалізації

interface Animal
{
    public function sound(): void;
}


class Cat implements Animal
{
    public function sound(): void
    {
        echo 'Meow';
    }
}

class Dog implements Animal
{
    public function sound(): void
    {
        echo 'Gav';
    }
}

function getSound(Animal $animal): void
{
    $animal->sound();
}

$cat = new Cat();
$dog = new Dog();

getSound($cat);
getSound($dog);
