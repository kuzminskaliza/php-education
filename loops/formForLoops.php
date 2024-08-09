<?php

$people = [''];
$isSuccess = false;
$nameErrors = [];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $people = $_POST['name'];
    if (!empty($_POST['add'])) {
        $people[] = '';
    } elseif (!empty($_POST['remove'])) {
        foreach ($_POST['remove'] as $key => $value) {
            if (array_key_exists($key, $people)) {
                unset($people[$key]);
            }
        }
    } elseif (!empty($_POST['name'])) {
        foreach ($_POST['name'] as $key => $value) {
            if (empty($value)) {
                $nameErrors[$key] = 'required';
            }
        }

        $isSuccess = empty($nameErrors);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма для реєстрації</title>
</head>
<body>
<style>

    .required  {
        border: 2px solid red;
    }

</style>
<?php if (!$isSuccess) : ?>
<div class="form-input">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <?php foreach ($people as $key => $person) : ?>
            <input type="text" name="name[<?= $key ?>]" value="<?= $person ?>"
                   class="<?= array_key_exists($key, $nameErrors) ? $nameErrors[$key] : '' ?>">&nbsp;
            <input type="submit" name="remove[<?= $key ?>]" value="x" title="Видалити">
            <br>
        <?php endforeach; ?>

        <input type="submit" name="add" value="Додати">

        <input type="submit" name="submit" value="Створити зустріч">

    </form>
</div>
<?php else: ?>
    <h2 style="color: royalblue ">Зустріч створено!</h2>
<?php endif; ?>
</body>
</html>

