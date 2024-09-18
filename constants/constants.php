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


//основні значення, що можуть бути доступні в масиві $_SERVER
echo $_SERVER['SERVER_NAME'];//виводить доменне імя(імя сервера)
echo $_SERVER['SERVER_ADDR'];//Виводить IP-адреси сервера
echo $_SERVER['SERVER_PORT'];//Виводить порт на якому працює сервер
echo $_SERVER['REMOTE_ADDR'];//Виводить IP-адресу клієнта, який робить запит
echo $_SERVER['REQUEST_METHOD'];//Виводить метод HTTP-запиту (GET, POST)
echo $_SERVER['SCRIPT_FILENAME'];//Виводить повний шлях до виконуваного PHP-скрипта
echo $_SERVER['REQUEST_URI'];//Виводить URI, що було запрошено клієнтом
echo $_SERVER['HTTP_USER_AGENT'];//Виводить інформацію про браузер
echo $_SERVER['HTTP_HOST'];//Виводить заголовок Host, вказанаого клієнта


