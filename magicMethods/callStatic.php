<?php
// Метод callStatic викликається тоді коли звертаєшся до неіснуйочого статичного методу
class StaticCalculator
{
    public static function __callStatic($name, $argument)
    {
        if ($name == 'subtract') {
            return $argument[0] - $argument[1];
        }
        if ($name == 'divide') {
            return  $argument[0] / $argument[1];
        }
        return "Метод $name не знайдено";
    }
}

echo StaticCalculator::subtract(10, 5) . PHP_EOL;
echo StaticCalculator::divide(10, 2) . PHP_EOL;