<?php
//Клас має бути відкритим для розширення але закритий для модифікацій

/**
 *
 */
interface Car
{
    /**
     * @return void
     */
    public function startEngine(): void;
}

/**
 *
 */
class Tesla implements Car
{
    /**
     * @return void
     */
    public function startEngine(): void
    {
        echo 'Двигун Tesla запустився безшумно' . PHP_EOL;
    }
}

/**
 *
 */
class Volvo implements Car
{
    /**
     * @return void
     */
    public function startEngine(): void
    {
        echo 'Двигун машини Volvo запустився зі звуком';
    }
}