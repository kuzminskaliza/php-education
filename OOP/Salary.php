<?php
require_once('Worker.php');
class Salary
{
static public function count(array $hours)
{
    return array_sum($hours) * 2000;
}
}