## PHP має різні типи даних

```php
// Прості типи даних
$a = 12345; // integer
$b = 3.14; // float
$c = true; // boolean
$c = false; // boolean
$d = null; // null
$e = "Hello"; // string

// Складні типи даних
$array = [1, 2, 3, 4, 5, 6, 7, 3.1415, true, false, null, 'string']; // масив

$array = ['cars', ['audi', 'volvo']]; // масив у масиві

$array2 = [1, 2, 3, 4, 5]; // одномірний масив 

$array3 = ['Audi' => 'car', 'Volvo' => 'car']; // одномірний масив з ключем

$array4 = [
    'cars' => ['audi'],
    'animals' => ['elephant', 'lama']
]; // багатомірний асоціативний масив

