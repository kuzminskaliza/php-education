<?php
require_once('Developer.php');

trait HasRest
{
    public function rest(): void
    {
        print_r($this->getName() . ' has rest');
    }
}