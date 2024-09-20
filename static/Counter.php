<?php

class Counter
{
    public static int $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public static function getCount(): int
    {
        return self::$count;
    }

}

$object1 = new Counter();
$object2 = new Counter();
$object3 = new Counter();

echo 'Кількість створених обʼєктів ' . Counter::getCount();