<?php

require_once('Worker.php');
require_once('Developer.php');
require_once('Salary.php');

//$worker = new Worker('Stepan', 40, [15, 6, 4]);

$developer = new Developer('Stepan', 40, [15, 6, 4]);

$salary = count($developer->getHours());
var_dump($salary);
