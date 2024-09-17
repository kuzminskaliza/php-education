<?php

require_once('Animal.php');

interface Dog extends Animal
{
    public function bark();

    public function fetch($item);

    public function tail();
}