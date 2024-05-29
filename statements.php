<?php
//PHP if Statements
$t = 14;

if ($t < 20) {
    echo "Have a good day!";
}

if ($t == 14) {
    echo "Have a good day!";
}


$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c) {
    echo 'Both conditions are true'; //якщо a > b i a < c то тоді умови правильні
}


$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
    echo '$a is a number between 2 and 7';
}


$t = date('H');

if ($t < '20') {
    echo 'Have a good day!';
} else {
    echo 'Have a good night!'; // якщо поточний час менше 20 то буде 'Have a good day!'
}


$t = date('H');

if ($t < '10') {
    echo 'Have a good morning!';
} else
    if ($t < '20') {
        echo 'Have a good day!';
    } else {
        echo 'Have a good night!'; // // якщо поточний час менше 10 то буде 'Have a good morning!'
    }


$a = 13;

$b = $a < 10 ? 'Hello' : 'Good Bye'; //щоб записати if i else в одному рядку

echo $b;


$a = 13;

if ($a > 10) {
    echo 'Above 10';
    if ($a > 20) {
        echo 'and also above 20';
    } else {
        echo 'but not above 20'; //вкладенний оператор - це коли оператор if в середині оператора if
    }
}

//PHP switch Statement

$favcolor = 'red';

switch ($favcolor) {
    case 'red':
        echo 'Your favorite color is red!';
        break;
    case 'blue':
        echo 'Your favorite color is blue!';
        break;
    case 'green':
        echo 'Your favorite color is green!';
        break;
    default:
        echo 'Your favorite color is neither red, blue, nor green!'; //виведеться тільки перший рядок до першого слова break і призупиняє виконання додаткового коду
}

switch ($favcolor) {
    case 'red':
        echo 'Your favorite color is red!';
    case 'blue':
        echo 'Your favorite color is blue!';
        break;
    case 'green':
        echo 'Your favorite color is green!';
        break;
    default:
        echo 'Your favorite color is neither red, blue, nor green!'; //виведеться тільки перший рядок і другий рядки
}


$d = 4;

switch ($d) {
    case 6:
        echo 'Today is Saturday';
        break;
    case 0:
        echo 'Today is Sunday';
        break;
    default:
        echo 'Looking forward to the Weekend'; //якшо жоден з блоків відповідності то default блок виконується
}


$d = 3;

switch ($d) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'The weeks feels so long!';
        break;
    case 6:
    case 0:
        echo 'Weekends are the best!';
        break;
    default:
        echo 'Something went wrong'; //для того щоб один і той же блок коду використовувався в кількох випадках
}







