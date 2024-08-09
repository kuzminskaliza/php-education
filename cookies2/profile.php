<?php
session_start();
if (empty($_SESSION['login'])) {
    header('Location: index1.php');
    die();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>

    </title>
</head>
<body>


<p>Username:</p> <?= $_SESSION['login'] ?>

</body>
</html>

