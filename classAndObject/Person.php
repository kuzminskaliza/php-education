<?php

/**
 *
 */
class Person
{

    /**
     * @var string|null
     */
    public ?string $name = 'Liza';
    /**
     * @var int
     */
    public int $age;

    /**
     *
     */
    public function __construct()
    {
        $this->age = 20;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPerson(): string
    {
        return "Name: " . $this->getName() . PHP_EOL . "Age: $this->age";
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

}


$person = new Person();
echo $person->getPerson();


