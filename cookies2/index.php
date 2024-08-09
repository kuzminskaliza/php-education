<?php
session_start();
$login = $_COOKIE['login'] ?? null;
$password = $_COOKIE['password'] ?? null;
if ($login == 'admin' && $password == 'admin'){
    $message = 'Ви авторизовані під користувачем admin';
} else {
    $message = 'Ви не авторизовані';
}

?>

<html lang="en">
<body>
<h1><?=$message?></h1>
<a href="cookie.php">Увійти в систему</a>
</body>
</html>

