<?php

require_once('Dog.php');

class Bella implements Dog
{
    public function eat(): void
    {
        echo 'Белла їсть корм' . PHP_EOL;
    }

    public function sleep(): void
    {
        echo 'Белла спить' . PHP_EOL;
    }

    public function run(): void
    {
        echo 'Белла бігає' . PHP_EOL;
    }

    public function bark(): void
    {
        echo 'Белла гавкає' . PHP_EOL;
    }

    public function fetch($item): void
    {
        echo "Белла приносить $item" . PHP_EOL;
    }

    public function tail(): void
    {
        echo 'Белла не має хвоста' ;
    }
}

$bulldog = new Bella();

$bulldog->eat();
$bulldog->sleep();
$bulldog->run();
$bulldog->bark();
$bulldog->fetch('свинку');
$bulldog->tail();
