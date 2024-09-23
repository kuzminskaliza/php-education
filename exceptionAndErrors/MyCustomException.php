<?php

class MyCustomException extends Exception
{

}

try {
    $age = 17;

    if ($age < 18) {
        throw new MyCustomException('Вік має бути 18 або більше');
    }
    echo "Вік: $age";
}catch (MyCustomException $exception) {
    echo 'Помилка: ' . $exception->getMessage();
}


