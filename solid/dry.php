<?php
//Потрібно уникати дублювання коду, якщо один і той самий код використовується декілька разів його краще винести в окремий клас

class Animal
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function eat(): void
    {
        echo $this->name . ' їсть' . PHP_EOL;
    }
}

class Cat extends Animal
{
    public function meow(): void
    {
        echo $this->name . ' нявкає' . PHP_EOL;
    }
}

class Rat extends Animal
{
    public function play(): void
    {
        echo $this->name . ' грається' . PHP_EOL;
    }
}

$cat = new Cat('Кіт');
$cat->eat();
$cat->meow();

$rat = new Rat('Пацюк');
$rat->eat();
$rat->play();