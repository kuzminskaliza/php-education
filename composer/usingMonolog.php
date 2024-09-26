<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('app');

$log->pushHandler(new StreamHandler(__DIR__ . '/app.log', Logger::DEBUG));

$log->info('Це інформаційне повідомлення');
$log->warning('Це попередження');
$log->error('Це помилка');


echo 'Логування завершено, перевірте файл app.log';