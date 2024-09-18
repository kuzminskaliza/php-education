<?php
//Код повинен бути простим і зрозумілим, Логіка потрібна бути настільки простою наскільки це можливо

/**
 *
 */
class Dog
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;

    }

    /**
     * @return void
     */
    public function eat(): void
    {
        echo $this->name . ' їсть' . PHP_EOL;
    }

    /**
     * @return void
     */
    public function sleep(): void
    {
        echo $this->name . ' спить' . PHP_EOL;
    }
}

$dog = new Dog('Белла');
$dog->sleep();
$dog->eat();