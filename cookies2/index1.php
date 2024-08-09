<?php
session_start();

if (!empty($_SESSION['login'])) {
    header('Location: profile.php');
    die();
}


$error = '';
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($email == 'kuzminskaliza2017@gmail.com' && $password == '123') {
        $_SESSION['login'] = $email;
        header('Location: profile.php');
        die();
    } else {
        $error = 'Не правильний пароль або логін';
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизація і реєстрація</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?= $error ?>
<form action="" method="post">
    <label for="form1Example1">Login</label>
    <input type="email" id="form1Example1" name="email">
    <label for="form1Example2">Password</label>
    <input type="password" id="form1Example2" name="password">
    <button type="submit">Sing in</button>

</form>


</body>
</html>



