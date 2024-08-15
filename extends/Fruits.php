<?php


/**
 *
 */
class Fruits
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $color;

    /**
     * @param string $name
     * @param string $color
     */
    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    /**
     * @return void
     */
    public function getInfo(): void
    {
       echo "Name: $this->name" . PHP_EOL . "Color: $this->color";
    }
}

//$apple = new Fruits('apple', 'red');
//$apple->getInfo();
