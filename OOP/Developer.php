<?php

require_once('Worker.php');
require_once('HasRest.php');


class Developer extends Worker
{
    use HasRest;
    protected string $position = 'developer';

    public function work()
    {

    }
}