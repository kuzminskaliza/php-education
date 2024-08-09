**Nginx**

Nginx — це високопродуктивний веб-сервер та зворотний проксі-сервер з відкритим вихідним кодом, який також може використовуватися
як поштовий проксі-сервер та балансувальник навантаження. Під зворотним проксуванням зазвичай розуміють процес, у якому сервер,
який отримує запит від клієнта, не обробляє його повністю самостійно, а частково чи повністю відправляє для обробки іншим (upstream) серверам.
Тобто, не перенаправляє клієнта, а самостійно відправляє запит і повертає отриману відповідь клієнту.

**Файли конфігурації nginx**

*nginx.conf*

Це основний файл конфігурації Nginx, який зазвичай знаходиться в `/etc/nginx/nginx.conf`. Він містить глобальні налаштування сервера і включає інші
конфігураційні файли. Основна структура файлу:

*sites-available/ і sites-enabled/*
- *sites-available/*: тут зберігаються конфігураційні файли для всіх доступних сайтів.
- *sites-enabled/*: тут зберігаються символьні посилання на файли з `sites-available/`, які мають бути активними.

Папка `conf.d/` містить додаткові конфігураційні файли, які включаються в основну конфігурацію. Це означає, що всі `.conf` файли
в цій папці будуть автоматично підключені.

*fastcgi.conf* і *fastcgi_params*
- *fastcgi.conf*: містить налаштування для взаємодії з FastCGI-серверами. Цей файл використовується для налаштування змінних
середовища та параметрів, необхідних для роботи з PHP або іншими FastCGI-обробниками.
- *fastcgi_params*: схожий на `fastcgi.conf`, але містить менше налаштувань. Іноді використовуються разом для налаштування
 різних аспектів FastCGI-запитів.

## Оновлює список пакетів для встановлення
sudo apt update

## Встановлює веб-сервер Nginx
sudo apt install nginx

## Перевіряє статус сервісу Nginx
sudo service nginx status

## Встановлює додаткові утиліти та бібліотеки, необхідні для роботи з репозиторіями
sudo apt install software-properties-common ca-certificates lsb-release apt-transport-https

## Додає PPA репозиторій для встановлення різних версій PHP
sudo add-apt-repository ppa:ondrej/php

## Встановлює Xdebug - розширення для PHP для налагодження коду
sudo apt-get install php-xdebug

## Створює директорію для проєкту PHP
sudo mkdir -p /var/www/php-education

## Змінює власника директорії на поточного користувача
sudo chown -R $USER:$USER /var/www/php-education

## Змінює права доступу до директорії
sudo chmod -R 755 /var/www/php-education

## Переглядає список файлів і директорій у /var/www
ls -la /var/www

## Переходить до директорії конфігурацій Nginx
cd /etc/nginx

## Переглядає список файлів і директорій у sites-available
ls -la sites-available

## Створює порожній конфігураційний файл для сайту
sudo touch sites-available/php-education.local.com

## Відкриває створений конфігураційний файл в текстовому редакторі Pluma
sudo pluma sites-available/php-education.local.com

```
server {
listen 80;
server_name php-education.local.com;
root /var/www/php-education;
index index.html index.htm index.php;

    location / {
        try_files $uri $uri/ =404;
    }
    
    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
    }
    
    location ~ /\.ht {
        deny all;
    }
}
```
## Переглядає список файлів і директорій у sites-enabled
ls -la sites-enabled

## Створює символічне посилання на конфігураційний файл у sites-enabled
sudo ln -s /etc/nginx/sites-available/php-education.local.com /etc/nginx/sites-enabled/php-education.local.com

## Переглядає список файлів і директорій у sites-enabled, щоб переконатися, що посилання створено
ls -la sites-enabled

## Перезапускає сервіс Nginx для застосування змін
sudo service nginx restart

## Перевіряє статус сервісу Nginx після перезапуску
sudo service nginx status

