<?php

//Константи для версій
echo PHP_VERSION . PHP_EOL;//Виводить поточну версію php   -- 8.3.11

echo PHP_MAJOR_VERSION . PHP_EOL;//Виводить основну версію php  -- 8

echo PHP_MINOR_VERSION . PHP_EOL;//Виводить підверсію в php  -- 3


//Константи операційної системи
echo PHP_OS . PHP_EOL;//Виводять інформацію про операційну систему -- Linux


//Константи директорій
echo DIRECTORY_SEPARATOR . PHP_EOL;//Виводить / для Linux,  або \ для Windows залежно від операційної системи

echo PATH_SEPARATOR . PHP_EOL;//Виводить ; на Windows, або : для Linux


//Константи типів даних
echo TRUE . PHP_EOL;//Виводить 1

echo FALSE . PHP_EOL;//Виводить нічого тому що 0

echo NULL . PHP_EOL;//Не виводить нічого

//Константи помилок
echo E_ERROR . PHP_EOL;//1

echo E_WARNING . PHP_EOL;//2


//Константи
echo __FILE__ . PHP_EOL;//Вказує шлях до поточного файлу

echo __LINE__ . PHP_EOL;//Виводить номер рядка на якому було використано константу

echo __DIR__ . PHP_EOL;//Вказує шлях до поточної директорії


