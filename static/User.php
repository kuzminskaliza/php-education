<?php

class User
{
    public static int $userCount = 0;
    public static int $minAge = 18;

    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        if (self::checkAge($age)) {
            $this->name = $name;
            $this->age = $age;
            self::$userCount++;
            echo "Користувач $name зареєстровано" . PHP_EOL;
        } else {
            echo "Користувач $name не може бути зареєстрованим через недостатній вік" . PHP_EOL;
        }
    }

    public static function checkAge(int $age): bool
    {
        return $age >= self::$minAge;
    }

    public static function getUserCount(): int
    {
        return self::$userCount;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}

$user1 = new User('Олег', 48);
$user2 = new User('Олена', 16);
$user3 = new User('Степан144', 36);

echo 'Кількість зареєстрованих користувачів: ' . User::getUserCount() . PHP_EOL;

$ageToCheck = 18;
if (User::checkAge($ageToCheck)) {
    echo "Користувач з віком $ageToCheck може бути зареєстрований" . PHP_EOL;
} else {
    echo "Користувач з віком $ageToCheck не може бути зареєстрований" . PHP_EOL;
}