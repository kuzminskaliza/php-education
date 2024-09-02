<?php


class Plant
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    protected string $color;
    /**
     * @var string
     */
    private string $bloomingSeason;

    /**
     * @param string $name
     * @param string $color
     * @param string $bloomingSeason
     */
    public function __construct(string $name, string $color, string $bloomingSeason)
    {
        $this->name = $name;
        $this->color = $color;
        $this->bloomingSeason = $bloomingSeason;
    }

    /**
     * @return void
     */
    public function waterPlant(): void
    {
        echo 'watered' . PHP_EOL;
    }

    /**
     * @return string
     */
    private function getBloomingSeason(): string
    {
        return $this->bloomingSeason;
    }

    /**
     * @return string
     */
    public function checkBloomingSeason(): string
    {
        return $this->getBloomingSeason();
    }
}

$myPlant = new Plant('Rose', 'red', 'summer');

echo $myPlant->name . PHP_EOL;

$myPlant->waterPlant();

echo $myPlant->checkBloomingSeason();