<?php
//Кожен клас повинен відповідати за одну задачу


//Поганий приклад
class OrderBad
{
    public function process(): void
    {
        echo 'Обробка замовлення' . PHP_EOL;
        echo 'Відправка листа з підтвердженням замовлення' . PHP_EOL;
    }
}
$order = new OrderBad();
$order->process();

//Хороший приклад, тому що розділи на різні класи свої обовʼязки

class OrderGood
{
    public function process(): void
    {
        echo 'Обробка замовлення' . PHP_EOL;
    }
}

class SendSMS
{
    public function sendConfirmationEmail(): void
    {
        echo 'Відправка листа з підтвердженням замовлення' . PHP_EOL;
    }
}

$order = new OrderGood();
$order->process();

$send = new SendSMS();
$send->sendConfirmationEmail();