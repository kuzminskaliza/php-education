<?php

//щоб перевести до рядка
$a = 5;       // Integer
$b = 5.34;    // Float
$c = 'hello'; // String
$d = true;    // Boolean
$e = null;    // null

$a = (string)$a;
$b = (string)$b;
$c = (string)$c;
$d = (string)$d;
$e = (string)$e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);


//щоб перевести до цілого числа
$a = 5;       // Integer
$b = 5.34;    // Float
$c = '25 kilometers'; // String
$d = 'kilometers 25'; // String
$e = 'hello'; // String
$f = true;    // Boolean
$g = null;    // null

$a = (int)$a;
$b = (int)$b;
$c = (int)$c;
$d = (int)$d;
$e = (int)$e;
$f = (int)$f;
$g = (int)$g;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);


//щоб привести до float
$a = 5;       // Integer
$b = 5.34;    // Float
$c = '25 kilometers'; // String
$d = 'kilometers 25'; // String
$e = 'hello'; // String
$f = true;    // Boolean
$g = null;    // null

$a = (float)$a;
$b = (float)$b;
$c = (float)$c;
$d = (float)$d;
$e = (float)$e;
$f = (float)$f;
$g = (float)$g;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);


//щоб привести до логічного значення
$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = 'hello'; // String
$g = '';      // String
$h = true;    // Boolean
$i = null;    // null

$a = (bool)$a;
$b = (bool)$b;
$c = (bool)$c;
$d = (bool)$d;
$e = (bool)$e;
$f = (bool)$f;
$g = (bool)$g;
$h = (bool)$h;
$i = (bool)$i;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
var_dump($h);
var_dump($i);


//щоб привести до null
$a = 5;       // Integer
$b = 5.34;    // Float
$c = 'hello'; // String
$d = true;    // Boolean
$e = null;    // null

$a = (unset)$a;
$b = (unset)$b;
$c = (unset)$c;
$d = (unset)$d;
$e = (unset)$e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);