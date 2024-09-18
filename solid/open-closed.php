<?php
//Клас має бути відкритим для розширення але закритий для модифікацій

interface Car
{
    public function startEngine(): void;
}

class Tesla implements Car
{
    public function startEngine(): void
    {
        echo 'двигун Тесли запустився безшумно' . PHP_EOL;
    }
}

class Volvo implements Car
{
    public function startEngine(): void
    {
        echo 'Двигун машини Volvo запустився зі звуком';
    }
}