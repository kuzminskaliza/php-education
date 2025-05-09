<?php

class Singleton
{
    private static ?Singleton $instance = null;
    private function __construct()
    {

    }

    public static function getInstance(): ?Singleton
    {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}


$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

echo $s1 === $s2 ? 'True' : 'False';