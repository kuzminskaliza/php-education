# Змінна

- Змінна в PHP починається із знаку `$` і використовується для зберігання даних.

# Типи даних

- **int**: ціле число
- **float**: число з комою
- **boolean**: true або false
- **null**: пусте значення
- **string**: рядок
- **array**: масив
- **object**: обʼєкт

# Синтаксис в PHP

PHP-код зазвичай починається з `<?php` та закінчується на `?>`. PHP-код може бути включений у HTML-документ.

```html
<!DOCTYPE html>
<html>
<body>

<?php
echo "Hello World!";
?>

</body>
</html>
```

### Ключ
- Ключ - це назва масиву. Тепер 'car' буде назвою ключа
``` 
$array = ['car' => ['audi']];
```

### Конкатенація
- Конкатенація - це поєднання двох рядків.
```
- echo 'Hello' . ' ' . 'world';
```
   
### Багатомірний масив
- Багатомірний масив - це масив, в якому є інші масиви.

### Багатомірний асоціативний масив
- Багатомірний асоціативний масив - це такий же масив у масиві, але з ключами у вигляді строк

### Екранування
- Екранування - це процес, що замінює одні символи на інші.
-  '/n'- розрив рядка або передача спеціального символа

### Ітерація 
- Ітерація — це будь-яке значення, яке можна перебрати за допомогою циклу foreach()

