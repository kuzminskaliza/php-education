<?php
//Арифметичний оператор
$a = 10;
$b = 6;

echo $a + $b;
echo $a - $b;
echo $a * $b;
echo $a / $b;
echo $a % $b;
echo $a ** $b;

//Оператори присвоєння
$x = 20;
$x += 100;

echo $x;


$x = 50;
$x -= 30;

echo $x;


$x = 5;
$x *= 6;

echo $x;


$x = 10;
$x /= 5;

echo $x;


$x = 15;
$x %= 4;

echo $x;


//Оператори порівння
$x = 100;
$y = "100";

var_dump($x == $y); //true тому що значення однакові


$x = 100;
$y = "100";

var_dump($x === $y);// false тому що різні типи


$x = 100;
$y = "100";

var_dump($x != $y); //false оскільки значення рівні


$x = 100;
$y = "100";

var_dump($x <> $y); //false оскільки значення рівні


$x = 100;
$y = "100";

var_dump($x !== $y); //true якщо х не дорівнює у і вони не одного типу


$x = 100;
$y = 50;

var_dump($x > $y); //true якщо х більший у


$x = 10;
$y = 50;

var_dump($x < $y); //true якщо х менший за у


$x = 50;
$y = 50;

var_dump($x >= $y); //true тому що х є більшим за у або рівний у


$x = 50;
$y = 50;

var_dump($x <= $y); //true тому що х є менший за у або рівний у


//Оператори приросту/зменшення
$x = 10;
echo ++$x; //збільшується на один якшо повертаємо х


$x = 10;
echo $x++; //повертає х а потім збільшує на 1


$x = 10;
echo --$x; //зменшує х на 1 якшо виводимо х


$x = 10;
echo $x--; //повертає х потім зменшує на 1

//Рядкові оператори
$txt1 = 'Hello';
$txt2 = ' world!';
echo $txt1 . $txt2; //обʼєднує два рядки


$txt3 = 'Hello';
$txt4 = 'world!';
$txt3 .= $txt4;
echo $txt3;


//Оператори масивів
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

print_r($x + $y); //обʼєднає х і у


$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

var_dump($x == $y); //повертає false тому що х і у мають різні ключі і значення


$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

var_dump($x === $y); //повертає false оскільки х і у мають різні ключі і значення  і не відносяться до одного і того ж самого типу


$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

var_dump($x != $y); //повертає true тому що х не рівний у


$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

var_dump($x <> $y); //повертає true тому що х не рівний у


$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

var_dump($x !== $y); //повертає true  якщо х не збігається з у


