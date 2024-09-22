<?php

//Метод call викликається тоді коли звертаються до неіснуючого або недоступного методу в обʼєкті
class Calculator
{
    public function __call($name, $argument)
    {
        if ($name == 'add') {
            return array_sum($argument);
        }
        if ($name == 'multiply') {
           return array_product($argument);
        }
        return "Метод $name не знайдено";
    }
}

$calc =  new Calculator();
echo $calc->add(1, 2, 4) . PHP_EOL;
echo $calc->multiply(2, 3, 5) . PHP_EOL;