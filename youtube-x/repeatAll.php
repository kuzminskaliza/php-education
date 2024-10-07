<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>game</title>
</head>
<body>


<?php
echo 'Hello, World!';

date_default_timezone_set('Europe/Kyiv');
echo date('Y-m-d H:i:s');

if (mt_rand(0, 1)) {
    ?>
    <div style="color: fuchsia">Текст</div>
    <?php
} else {
    ?>
    <div style="color: aqua">Текст</div>
    <?php
}
?>
</body>
<?php
$asd_asd = 5;
echo $asd_asd - 3;
echo $asd_asd + 2;

$asd = $var = $www = 5;
$num = 1234;

$bool = true;
$str = 'Hello World 12344';

$user = 123;
if (isset($user)) {
    echo 'Змінна існує';
} else {
    echo 'Змінна не існує';
}
$string = "hello";
if (empty($string)) {
    echo 'Рядок пустий';
} else {
    echo 'В рядку є текст';
}

echo gettype('123');

echo is_int(1);

$str1 = '43.5gf';
$number = $str1 - 12;
echo $number;

require 'Point.php';
$point1 = new Point();
$point1->x = 13;
$point1->y = 2;
echo $point1->x;

$point2 = new Point();
$point2->x = 11;
$point2->y = 42;
echo $point2->x;

unset($point2);
echo Point::$numb;

$first = new Point();
$first->x = 3;
$first->y = 3;

$second = clone $first;
$second->x = 5;
$second->y = 5;

echo "x: $first->x, y: $first->y";
echo "x: $second->x, y: $second->y";

echo pow(2, 8);
echo sqrt(16);


$p1 = new Point();
$p1->x = 10;
$p1->y = 34;

$p2 = new Point();
$p2->x = 3;
$p2->y = 10;

$distance = sqrt((pow(($p2->x - $p1->x), 2) + pow(($p2->y - $p1->y), 2)));
echo $distance;

const NUMBER = 1;
echo NUMBER;

echo 'Шлях до файлу' . __DIR__;

$x = 1;
$y = '1';

echo $x < $y;
echo $x <= $y;
echo $x > $y;
echo $x >= $y;
echo $x == $y;
echo $x != $y;
echo $x <> $y;
echo $x === $y;
echo $x !== $y;
echo $x <=> $y;


echo 1 > 0;
echo 1 > 1;
echo 1 >= 1;
echo 1 < 0;
echo 1 < 1;
echo 1 <= 1;
echo 1 == 0;
echo 1 == 1;
echo 1 != 0;
echo 1 != 1;
echo 0 == '8qes';
echo 0 == '';
echo 0 == 'hello';
echo 0 == null;


if (true) {
    echo 'true';
} else {
    echo 'false';
}

$char = 'php';
if ($char == 'php') {
    echo 'мова php';
} elseif ($char == 'js') {
    echo 'мова js';
} elseif ($char == 'c#') {
    echo 'Невідома мова';
}

$numb = 5;
if ($numb > 0 && $numb < 8) {
    echo "0<$numb<8";
}
if ($numb > 0 || $numb < 8) {
    echo 'Істина';
}

if (!($numb > 0)) {
    echo 'Істина';
}

$x1 = -450;
$x1 = $x1 < 0 ? -$x1 : $x1;
echo $x1;

$y1 = null;
$y1 = $y1 ?? 1;
echo $y1;

$chars = 'c++';
switch ($chars) {
    case 'php':
        echo 'мова php';
        break;
    case 'js':
        echo 'мова js';
        break;
    case 'c#':
        echo 'мова c#';
        break;
    default :
        echo 'Невідома мова';
}

$homepage = file_get_contents('youtube-x/text.txt');
$homepage .= 'Текст........';
$filename = date('Y-m-d-H-i-s') . '.txt';
file_put_contents($filename, $homepage);

$i = 1;
while ($i <= 5) {
    $i++;
    if ($i == 4) continue;
    if ($i > 5) break;
    echo $i;
}

$ii = 0;
do {
    echo $ii;
} while (++$ii <= 5);


for ($d = 0; $d < 5; $d++) {
    echo $d;
}

for ($d = 0; $d <= 100; $d += 2) {
    echo $d;
}

for ($i = 2; $i < 100; $i++) {
    for ($j = 2; $j < $i; $j++) {
        if (($i % $j) != 0) {
            continue;
        } else {
            $flag = true;
            break;
        }
    }
    if (!$flag) echo "$i";
    $flag = false;
}
$arr = [15 => 'hello', 18 => 'world', 11 => '!'];
print_r($arr[1]);

$array = ['one' => '1', 'two' => '2'];
$array1['one'] = '1';
$array1['two'] = '2';
print_r($array1[1]);

$transport = ['Автомобілі' => ['Tesla', 'Mustang', 'Jeep']];
print_r($transport);

$arr1 = [1, 2, 3];
list($one, $two, $three) = $arr1;
echo $one;
echo $two;
echo $three;

$number1 = [1, 2, 3];
for ($i = 0; $i < count($number1); $i++) {
    echo $number1[$i];
}

$arrayNew = [
    'auto' => 'Tesla',
    'plane' => 'Мрія',
    'ship' => 'Ship'
];
foreach ($arrayNew as $key => $value) {
    echo "$key : $value";
}

$arr = [5 => 1, 2, 4];
if (is_array($arr)) {
    echo 'Це масив';
} else {
    echo 'Це не масив';
}
if (array_key_exists(4, $arr)) {
    echo 'Ключ 5 знайдений в масиві';
} else {
    echo 'Ключ 5 не знайдений в масиві';
}
for ($i = 0; $i < 10; $i++) {
    if (isset($arr[$i])) {
        echo "Елемент $arr[$i] існує";
    } else {
        echo "Елемент $arr[$i] не існує";
    }
}
unset($arr[3]);

$array = ['red', 'green', 'blue', 'violet', 'yellow'];
echo $array[rand(0, count($array) - 1)];

$length = rand(5, 10);
$array = [];
for ($i = 0; $i < $length; $i++) {
    $array[$i] = rand(0, 100);
}
sort($array);
print_r($array);

function myFunction($a, $b)
{
    $sum = $a + $b;
    return $sum;
}

echo myFunction(15, 32);

function sum(): int
{
    global $var;
    $var = 2;
    return $var;
}

$var = 6;
echo sum();

function sum1(): int
{
    static $count = 0;
    return ++$count;
}

echo sum1();
echo sum1();
echo sum1();
echo sum1();

function formatSize($bytes): array
{
    $kbytes = $bytes / 1024;
    $mbytes = $kbytes / 1024;
    $gbytes = $mbytes / 1024;
    return [$bytes, $kbytes, $mbytes, $gbytes];
}

list($bytes, $kbytes, $mbytes, $gbytes) = formatSize(54989777);
print_r(formatSize(54989777));

function recursiya($counter)
{
    if ($counter > 0) {
        echo($counter--);
        recursiya($counter);
    } else return;
}

recursiya(8);

function first()
{
    return 'First function';
}

function second()
{
    return 'Second function';
}

$newFunction = rand(0, 1) ? 'first' : 'second';
echo $newFunction();


$message = 'message';
$mFu = function () use ($message) {
    $message = 'NEw';
    return $message;
};
echo $mFu();
echo $message;

function odd(int $number)
{
    if ($number % 2 == 0) {
        return false;
    } else {
        return true;
    }
}

echo odd(4);

function sumNEw(...$item)
{
    $sum = 0;
    for ($i = 0; $i < count($item); $i++) {
        $sum += $item[$i];
    }
    return $sum;
}

echo sumNEw(1, 3, 4, 54, 3, 235);


$arrN = [
    'name' => 'Petr',
    'phones' => [
        '322323',
        '12222'
    ]
];
$encodeArr = json_encode($arrN);
echo $encodeArr;
print_r(json_decode($encodeArr, true));


class Hello
{
    public function printText()
    {
        return 'Hello World';
    }
}

$obj = new Hello();
echo $obj->printText();

class Point
{
    private $x;
    private $y;

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function distance()
    {
        return sqrt($this->getX() ** 2 + $this->getY() ** 2);
    }
}

$p1 = new Point();
$p1->setX(20);
$p1->setY(7);
echo $p1->distance();


class HelloWorld
{
    public static function printText()
    {
        return 'Hello World';
    }
}

echo HelloWorld::printText();


class Page
{
    static $content = 'Тіло Сайту';

    public static function footer()
    {
        return 'футер сайту';
    }

    public static function header()
    {
        return 'хедер сайту';
    }

    public static function site()
    {
        echo self::header() .
            self::$content .
            self::footer();
    }
}

Page::site();

class People
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

$object = new People(10, 29);
print_r($object);


class Animal
{
    public $legs = 4;

    public function info()
    {
        echo "У мене $this->legs Лапки";
    }
}

class Dog extends Animal
{
    public $name = 'Dog';

    public function voice()
    {
        echo "$this->name гавкає";
    }
}

$dog = new Dog();
$dog->info();
$dog->voice();
?>
