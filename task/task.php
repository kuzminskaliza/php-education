<?php
//Потрібно написати програму, яка на вхід бере число і повертає його словами.
// Макс. число 999. Без відмінювань.  Приклад. $int = $this->getString(123); echo $int;
// // «сто двадцять три»
function numberToWords(int $number): string
{
    $hundreds = [
        1 => 'сто',
        2 => 'двісті',
        3 => 'триста',
        4 => 'чотириста',
        5 => 'пʼятсот',
        6 => 'шістсот',
        7 => 'сімсот',
        8 => 'вісімсот',
        9 => 'девястот',
    ];

    $tens = [
        2 => 'двадцять',
        3 => 'тридцять',
        4 => 'сорок',
        5 => 'пʼядесят',
        6 => 'шістдесят',
        7 => 'сімдесят',
        8 => 'вісімдесят',
        9 => 'девʼносто',
    ];

    $ones = [
        1 => 'один',
        2 => 'два',
        3 => 'три',
        4 => 'чотири',
        5 => 'пʼять',
        6 => 'шість',
        7 => 'сім',
        8 => 'вісім',
        9 => 'девʼять',
    ];

    $teens = [
        10 => 'десять',
        11 => 'одинадцять',
        12 => 'дванадцять',
        13 => 'тринадцять',
        14 => 'чотирнадцять',
        15 => 'пятнадцять',
        16 => 'шістнадцять',
        17 => 'сімнадцять',
        18 => 'вісімнадцять',
        19 => 'девятнадцять',
    ];

    if ($number < 1 || $number > 999) {
        return 'Невідоме число';
    }

    $result = [];
    $h = intdiv($number, 100);
    $t = intdiv($number % 100, 10);
    $o = $number % 10;

    if ($h > 0) {
        $result[] = $hundreds[$h];
    }

    if ($t == 1) {
        $result[] = $teens[$t * 10 + $o];
    } else {
        if ($t > 1) {
            $result[] = $tens[$t];
        }
        if ($o > 0) {
            $result[] = $ones[$o];
        }
    }

    return implode(' ', $result);
}

//echo numberToWords(123);

//Напиши функцію, яка приймає число n і повертає суму всіх чисел від 1 до n.
function sumTo(int $number): int
{
    $sum = 0;
    for ($i = 1; $i <= $number; $i++) {
        $sum += $i;
    }
    return $sum;
}

//echo sumTo(555);


//Напиши функцію, яка приймає масив чисел і повертає кількість парних.

function evenCount(array $numbers): int
{
    $count = 0;
    foreach ($numbers as $number) {
        if ($number % 2 === 0) {
            $count++;
        }
    }
    return $count;

}

//echo evenCount([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);

//Створи функцію, яка приймає масив і повертає його у зворотному порядку без використання array_reverse

function reverseArray(array $array): array
{
    $reversedArray = [];
    foreach ($array as $item) {
        array_unshift($reversedArray, $item);
    }
    return $reversedArray;
}
//reverseArray([1, 2, 3, 4, 5]);

//Напиши функцію, яка повертає найбільше число з масиву.

function maxNumber(array $numbers): int
{
    $max = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }
    return $max;
}

//echo maxNumber([1, 2, 36, 4, 5]);

//функція яка замість пробілів ставить тире
function replaceSpaces(string $string): string
{
    $string = str_replace(' ', '-', $string);
    return $string;
}

//echo replaceSpaces('Hello World');

function isPalindrome(string $string): bool
{
    return $string === strrev($string);
}
//echo isPalindrome('топот');

//функція яка перевіряє чи позитивне число чи ні
function isPositive(int $number): bool
{
    $number = abs($number);
    if ($number > 0) {
        return true;
    }
    return false;
}

//var_dump(isPositive(10));

//функція перевіряє кількість символів
function stringLength(string $text): int
{
    return strlen($text);
}

//echo stringLength('Hello World');

//суму двох чисел
function sum(int $a, int $b): int
{
    return $a + $b;
}

//echo sum(1, 2);

//функція шукає чи є число 5 в масиві
function containsFive(array $numbers): bool
{
    foreach($numbers as $number) {
        if ($number === 5) {
            return true;
        }
    }
    return false;
}
//echo containsFive([1, 2, 3, 4, 5]);

// рахує кількість голосних букв
function countVowels(string $string): int
{
    $vowels = ['а', 'о', 'у', 'е', 'и', 'і', 'є', 'я', 'ю', 'ї'];
    $count = 0;
    $string = mb_strtolower($string);

    for ($i = 0; $i < mb_strlen($string); $i++) {
        $char = mb_substr($string, $i, 1);
        if (in_array($char, $vowels, true)) {
            $count++;
        }
    }

    return $count;
}
//echo countVowels('Привіт Світе');
