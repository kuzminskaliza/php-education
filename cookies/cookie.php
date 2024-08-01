<?php

ini_set('session.cookie_lifetime', 86400);
session_start();
if (count($_POST)) {
    $login = $_POST['login'] ?? null;
    $password = $_POST['password'] ?? null;
    if ($login == 'admin' && $password == 'admin'){
       $_SESSION['login'] =  $login;
        header("Location: index.php");
        die();
    }
}
?>

<html lang="en">
<body>
<form action="index.php" method="post">
    <label>Login</label>
    <input type="text" name="login"> <br>
    <label>Password</label>
    <input type="password" name="password"> <br>
    <input type="submit" value = "Увійти">
</form>
</body>
</html>

