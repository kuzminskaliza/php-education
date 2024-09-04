<?php

use traits\Horn;

require_once('Horn.php');


class GasCars
{
    use Horn;

    public function refuel(): void
    {
        echo 'Заправити машину газом';
    }
}
$gasCar = new GasCars();
$gasCar->horn();
$gasCar->refuel();
