<?php

class ValidationException extends Exception
{

}

class NameValidation extends ValidationException
{

}

class NameShortValidation extends ValidationException
{

}

class AgeValidation extends ValidationException
{

}

class EmailValidation extends ValidationException
{

}

class PasswordValidation extends ValidationException
{

}

/**
 * @throws NameShortValidation
 * @throws PasswordValidation
 * @throws AgeValidation
 * @throws NameValidation
 * @throws EmailValidation
 */
function validateForm($data): true
{
    if (empty($data['name'])) {
        throw new NameValidation('Поле для імені не має бути пустим');
    }

    if (strlen($data['name']) < 3) {
        throw new NameShortValidation('Імʼя повинно бути не менше 3 символів');
    }

    if ($data['age'] < 18 || $data['age'] > 87) {
        throw new AgeValidation('Вік має бути від 18 до 87');
    }

    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        throw new EmailValidation('Не вірний формат електронної пошти');
    }

    if ($data['password'] !== $data['confirm_password']) {
        throw new PasswordValidation('Паролі не збігаються');
    }
    return true;
}

try {
    $formData = [
        'name' => 'Liza',
        'age' => 18,
        'email' => 'liza@gmail.com',
        'password' => 12345678,
        'confirm_password' => 12345678
    ];

    validateForm($formData);

    echo 'Всі дані пройшли перевірку';
} catch (NameValidation|AgeValidation|NameShortValidation|EmailValidation|PasswordValidation $exception) {  //PHP сам підказав що можна так зробити
    echo 'Помилка: ' . $exception->getMessage();
} catch (ValidationException $exception) {
    echo 'Інша помилка: ' . $exception->getMessage();
} catch (Exception $exception) {
    echo 'Невідома помикла: ' . $exception->getMessage();
}