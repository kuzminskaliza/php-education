<!DOCTYPE html>
<html lang="en">
<body>

<?php
$x = 5;
var_dump($x); //отримує тип даних будь-якого обʼєкта


//string
$z = "Hello World!";
$y = 'Hello world!';

var_dump($z);
echo "<br>";
var_dump($y);


//integer
$a = 5874;
var_dump($a);


//float
$b = 10.409;
var_dump($b);


//boolean
$c = true;
var_dump($c);


//array - масив
$cars =["Volvo","BMW","Toyota"];
var_dump($cars);


//object
class Car {
    public $color;
    public $model;

    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function message(){
        return "My car is a " . $this->color . " " . $this->model . "!";
   }
}
$myCar = new Car("red", "Volvo");
var_dump($myCar);


//null
$f = "hello world!";
$f = null;
var_dump($f);

?>

</body>
</html>
