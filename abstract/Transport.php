<?php


/**
 *
 */
abstract class Transport
{
    /**
     * @var string
     */
    protected string $brand;
    /**
     * @var string
     */
    protected string $color;
    /**
     * @var int
     */
    protected int $years;
    /**
     * @var string
     */
    protected string $model;

    /**
     * @param $brand
     * @param $color
     * @param $years
     * @param $model
     */
    public function __construct($brand, $color, $years, $model)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->years = $years;
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    abstract function startEngine(): mixed;

    /**
     * @return string
     */
    public function getCarInfo(): string
    {
        return "{$this->brand} {$this->years} {$this->color} {$this->model}";
    }

}