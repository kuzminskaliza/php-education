<!DOCTYPE html>
<html lang="en">
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input style="border-color: aqua"   type="text" name="name">
    <input type="submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_REQUEST['name']);
    if (empty($name)) {
        echo 'Name is empty';
    } else {
        echo $name;
    }
}
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    Name: <input style="border-color: aqua" type="text" name="name"><br>
    Email: <input style="border-color: aqua"  type="text" name="email"><br>
<input type="submit">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $name = htmlspecialchars($_REQUEST['name']);
    $email = htmlspecialchars($_REQUEST['email']);

    if (empty($name)) {
        echo 'Name is empty<br>';
    } else {
        echo 'Name: ' . $name . '<br>';
    }

    if (empty($email)) {
        echo 'Email is empty<br>';
    } else {
        echo 'Email: ' . $email . '<br>';
    }
}
?>
</body>
</html>


