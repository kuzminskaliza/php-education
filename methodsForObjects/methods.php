<?php

//серіалізація це перетворення обєкта в рядок
//десеріалізація це перетворення рядка в обєкт
class Car
{
    public $brand;
    public $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }
}

$car = new Car('Tesla', 'Model X');

$serializedCar = serialize($car);
echo $serializedCar . PHP_EOL;

$unserializedCar = unserialize($serializedCar);
echo $unserializedCar->brand . ' ' . $unserializedCar->model;


//is_object() перевіряє змінну чи вона є обєктом чи ні
class Animal
{

}

$dog = new Animal;
$cat = 'Cat';

echo is_object($dog) ? 'Dog is an object' : 'Dog is not an object';
echo is_object($cat) ? 'Cat is an object' : 'Cat is not an object';


//method_exists - перевіряє чи є такий метод у класі
class Robot
{
    public function greet()
    {
        return 'Привіт, Людина!';
    }
}

$robot = new Robot();
$methodName = 'greet';

if (method_exists($robot, $methodName)) {
    echo $robot->$methodName();
} else {
    echo 'методу не існує';
}


//property_exists() перевіряє на наявність вдастивість обєкта
class Book
{
    public $title;
    protected $author;


    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }
}

$book = new Book('Blood and Ash', 'Jennifer Lynn Armentrout');

if (property_exists($book, 'title')) {
    echo 'Назва книги: ' . $book->title . PHP_EOL;
}

if (property_exists($book, 'author')) {
    echo 'Автор існує але захищений' . PHP_EOL;
}


//get_class() отримує назву класу обєкта
class Computer
{

}

$computer = new Computer();
echo 'Цей обʼєкт належить класу: ' . get_class($computer) . PHP_EOL;


//class_exist() перевіряє чи існує клас
if (class_exists('Computer')) {
    echo 'Клас Computer існує' . PHP_EOL;
} else {
    echo 'Клас Computer не існує' . PHP_EOL;
}


//interface_exists() превіряє чи існує інтерфейс
interface Drive
{
    public function drive();
}

if (interface_exists('Drive')) {
    echo 'Інтерфейс Drive існує' . PHP_EOL;
}


//trait_exists() перевіряє чи існує трейт
trait Logger
{
    public function log($message): void
    {
        echo "Log: $message";
    }
}

if (trait_exists('Logger')) {
    echo 'Трейт Logger існує' . PHP_EOL;
}


// get_parent_class() отримує батьківський клас з обєкта
class Vehicle
{

}

class Cars extends Vehicle
{

}

$cars = new Cars();
echo 'Батьківський клас для Cars: ' . get_parent_class($cars) . PHP_EOL;


//Оператор instanceof перевіряє чи є обєкт екзмпляром класу
class Animals
{
}

class Dogs extends Animals
{
}

$dogs = new Dogs();

if ($dogs instanceof Animals) {
    echo 'Dogs є екземпляром Animals' . PHP_EOL;
}

if ($dogs instanceof Dogs) {
    echo 'Dogs є екземпляром Dogs' . PHP_EOL;
}


// Оператор ::class використовується для отримання повної назви класу
class Person
{
}

echo Person::class . PHP_EOL;
{
}


//clone - створює копію обʼєкта
class Phone
{
    public string $brand;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }
}

$phone = new Phone('iPhone');
$clonedPhone = clone $phone;

echo $clonedPhone->brand;