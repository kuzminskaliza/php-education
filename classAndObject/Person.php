<?php

class Person
{
    /**
     * @var string|null
     */
    public ?string $name = 'Liza';
    public int $age;

    public function __construct()
    {
        $this->age = 20;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPerson(): string
    {
        return "Name: " . $this->getName() . PHP_EOL . "Age: $this->age";
    }

    public function getAge(): int
    {
        return $this->age;
    }

}


$person = new Person();
echo $person->getPerson();


