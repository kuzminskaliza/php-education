<?php

/**
 *
 */
interface Vehicle
{
    /**
     *
     */
    public const MAX_SPEED = 120;

    /**
     * @return void
     */
    public function drive(): void;
}
echo 'Базова швидкість' . Vehicle::MAX_SPEED . PHP_EOL;


/**
 *
 */
class Cars implements Vehicle
{
    /**
     * @var string
     */
    protected string $model;
    /**
     *
     */
    public const int MAX_SPEED = 200;

    /**
     * @return void
     */
    public function drive(): void
    {
        echo 'Модель машини: ' . $this->model . ' Максимальна швидкість машини: ' . self::MAX_SPEED . PHP_EOL;
    }

    /**
     * @param $model
     */
    public function __construct($model)
    {
        $this->model = $model;

    }
}


/**
 *
 */
class Tesla extends Cars
{
    /**
     * @var string
     */
    public string $color;
    /**
     *
     */
    public const int MAX_SPEED = 360;

    /**
     * @return void
     */
    public function drive(): void
    {
        echo 'Модель машини: ' . $this->model . ' Максимальна швидкість тесли: ' . self::MAX_SPEED . PHP_EOL;
    }

    /**
     * @param $model
     * @param $color
     */
    public function __construct($model, $color)
    {
        parent::__construct($model, $color);
    }
}

$car = new Cars('Volvo');
$car->drive();

$tesla =  new Tesla('Tesla', 'White');
$tesla->drive();