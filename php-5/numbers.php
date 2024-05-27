<!DOCTYPE html>
<html lang="en">
<body>

<?php
$a = 5; //integer
$b = 5.34; //float
$c = "25"; //number string

var_dump($a);
var_dump($b);
var_dump($c);

$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));


?>

</body>
</html>


