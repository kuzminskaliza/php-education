<?php

namespace traits;

trait Horn
{
    public function horn(): void
    {
        echo 'Сигнал!!' . PHP_EOL;
    }

}