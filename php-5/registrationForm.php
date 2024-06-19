<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<style>
    .error {
        color: red;
    }

    .form-input.input-error > label {
        color: red;
    }

    .form-input.input-error > input {
        border: 2px solid red;
    }

    .form-input.input-success > label {
        color: green;
    }

    .form-input.input-success > input {
        border: 2px solid green;
    }


</style>
<?php
$formShow = true;

$nameErr = $emailErr = $ageErr = $dateErr = $websiteErr = $phoneErr = $passwordErr = $confirm_passwordErr = $genderErr = $colorErr = $agreeErr = '';
$name = $email = $age = $date = $website = $phone = $password = $confirm_password = $comment = $gender = $color = $agree = '';
$nameClass = $emailClass = $ageClass = $dateClass = $websiteClass = $phoneClass = $passwordClass = $confirm_passwordClass = $genderClass = $colorClass = $agreeClass = '';

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $nameErr = 'Імʼя обовʼязкове';
        $nameClass = 'input-error';
    } else {
        $name = test_input($_POST['name']);
        $nameClass = 'input-success';
    }
    if (empty($_POST['email'])) {
        $emailErr = 'Електронна пошта обовʼязкова';
        $emailClass = 'input-error';
    } else {
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'Недійсний формат електронної пошти';
            $emailClass = 'input-error';
        } else {
            $emailClass = 'input-success';
        }

    }
    if (empty($_POST['age'])) {
        $ageErr = 'Потрібно вказати вік';
        $ageClass = 'input-error';
    } else {
        $age = test_input($_POST['age']);
        if ($age < 18 || $age > 100) {
            $ageErr = 'Вказати вік від 18 до 100';
            $ageClass = 'input-error';
        } else {
            $ageClass = 'input-success';
        }
    }
    if (empty($_POST['date'])) {
        $dateErr = 'Вкажіть дату народження';
        $dateClass = 'input-error';
    } else {
        $date = test_input($_POST['date']);
        $currentDate = date('Y-m-d');
        if (strtotime($date) > strtotime($currentDate)) {
            $dateErr = 'Що там в майбутньому?';
            $dateClass = 'input-error';
        } else {
            $dateClass = 'input-success';
        }
    }
    if (empty($_POST['website'])) {
        $websiteErr = '';
        $websiteClass = 'input-error';
    } else {
        $website = test_input($_POST['website']);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = 'Недійсне посилання';
            $websiteClass = 'input-error';
        } else {
            $websiteClass = 'input-success';
        }
    }
    if (empty($_POST['phone'])) {
        $phoneErr = '';
        $phoneClass = 'input-error';
    } else {
        $phone = test_input($_POST['phone']);
        if (!preg_match('/^\+380\d{9}$/', $phone)) {
            $phoneErr = 'Не вірно вказаний номер ';
            $phoneClass = 'input-error';
        } else {
            $phoneClass = 'input-success';
        }
    }
    if (empty($_POST['password'])) {
        $passwordErr = 'Створіть пароль';
        $passwordClass = 'input-error';
    } else {
        $password = test_input($_POST['password']);
        if (strlen($password) < 8) {
            $passwordErr = 'Пароль має містити найменше 8 символів';
            $passwordClass = 'input-error';
        } else {
            $passwordClass = 'input-success';
        }
    }
    if (empty($_POST['confirm_password'])) {
        $confirm_passwordErr = 'Підтвердіть пароль';
        $confirm_passwordClass = 'input-error';
    } else {
        $confirm_password = test_input($_POST['confirm_password']);
        if ($confirm_password !== $password) {
            $confirm_passwordErr = 'Не правильно вказаний пароль';
            $confirm_passwordClass = 'input-error';
        } else {
            $confirm_passwordClass = 'input-success';
        }
    }

    if (empty($_POST['comment'])) {
        $comment = '';
    } else {
        $comment = test_input($_POST['comment']);
    }

    if (empty($_POST['gender'])) {
        $genderErr = 'Вкажіть стать';
        $genderClass = 'input-error';
    } else {
        $gender = test_input($_POST['gender']);
        $genderClass = 'input-success';
    }

    if (empty($_POST['color'])) {
        $colorErr = 'Оберіть колір';
        $colorClass = 'input-error';
    } else {
        $color = test_input($_POST['color']);
        $colorClass = 'input-success';
    }

    if (empty($_POST['agree'])) {
        $agreeErr = 'Підтвердження обовʼязкове';
        $colorClass = 'input-error';
    } else {
        $agree = test_input($_POST['agree']);
        $agreeClass = 'input-success';
    }

    $arr = [$nameErr, $emailErr, $ageErr, $dateErr, $websiteErr, $phoneErr, $passwordErr, $confirm_passwordErr, $genderErr, $colorErr, $agreeErr];

    if (empty(array_filter($arr))) {
        $formShow = false;
    }
}

?>

<?php if ($formShow) : ?>
    <h2>Форма для реєстрації</h2>
    <p><span class="error">Обовʼязково</span></p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-input <?php echo $nameClass; ?>">
            <label>Імʼя:</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error"><?php echo $nameErr; ?></span>

        </div>
        <br><br>
        <div class="form-input <?php echo $emailClass; ?>">
            <label>Електронна пошта:</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span>

        </div>
        <br><br>
        <div class="form-input <?php echo $ageClass; ?>">
            <label>Вік:</label>
            <input type="number" name="age" value="<?php echo $age; ?>">
            <span class="error"><?php echo $ageErr; ?></span>
        </div>
        <br> <br>
        <div class="form-input <?php echo $dateClass; ?>">
            <label>Дата народження:</label>
            <input type="date" name="date" value="<?php echo $date; ?>">
            <span class="error"><?php echo $dateErr; ?></span>
        </div>
        <br> <br>
        <div class="form-input <?php echo $websiteClass; ?>">
            <label> Вебсайт: </label>
            <input type="text" name="website" value="<?php echo $website; ?>">
            <span class="error"><?php echo $websiteErr; ?></span>

        </div>
        <br><br>
        <div class="form-input <?php echo $phoneClass; ?>">
            <label>Номер телефону:</label>
            <input type="text" name="phone" value="<?php echo $phone; ?>">
            <span class="error"><?php echo $phoneErr; ?></span>

        </div>
        <br><br>
        <div class="form-input <?php echo $passwordClass; ?>">
            <label>Пароль:</label>
            <input type="password" name="password" value="<?php echo $password; ?>">
            <span class="error"><?php echo $passwordErr; ?></span>

        </div>
        <br><br>
        <div class="form-input <?php echo $confirm_passwordClass; ?>">
            <label>Повторіть пароль:</label>
            <input type="password" name="confirm_password" value="<?php echo $confirm_password; ?>">
            <span class="error"><?php echo $confirm_passwordErr; ?></span>

        </div>
        <br><br>
        Коментар: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
        <br><br>
        Стать:
        <div class="form-input <?php echo $genderClass; ?>">
            <input type="radio" name="gender" <?php echo $gender == 'female' ? 'checked' : ''; ?> value="female">Жінка
            <input type="radio" name="gender" <?php echo $gender == 'male' ? 'checked' : ''; ?> value="male">Чоловік
            <input type="radio" name="gender" <?php echo $gender == 'other' ? 'checked' : ''; ?> value="other"> Інше
            <span class="error"><?php echo $genderErr; ?></span>
        </div>
        <br><br>
        <div class="form-input <?php echo $colorClass; ?>">
            <label>Улюблений колір</label>
            <select name="color">
                <option value="" <?php if (empty($color)) echo 'selected'; ?>>Оберіть колір</option>
                <option value="Червоний" <?php if ($color === 'Червоний') echo 'selected'; ?>>Червоний</option>
                <option value="Синій" <?php if ($color === 'Синій') echo 'selected'; ?>>Синій</option>
                <option value="Зелений" <?php if ($color === 'Зелений') echo 'selected'; ?>>Зелений</option>
                <option value="Жовтий" <?php if ($color === 'Жовтий') echo 'selected'; ?>>Жовтий</option>
            </select>
            <span class="error"><?php echo $colorErr; ?></span>
        </div>
        <br> <br>
        <div>
            <label>Погоджуюсь на опрацювання моїх персональних даних</label>
            <input type="checkbox" name="agree" <?php if ($agree) echo 'checked'; ?>>
            <span class="error"><?php echo $agreeErr; ?></span>
        </div>
        <input type="submit" name="submit" value="Відправити">
    </form>
<?php else: ?>
    <h2 style="color: green">Ви успішно зареєструвались!</h2>
    <?php
    echo 'Імʼя: ' . $name . '<br>';
    echo 'Електронна пошта: ' . $email . '<br>';
    echo 'Вік: ' . $age . '<br>';
    echo 'Дата народження: ' . $date . '<br>';
    echo 'Вебсайт: ' . $website . '<br>';
    echo 'Номер телефону: ' . $phone . '<br>';
    echo 'Пароль: ' . $password . '<br>';
    echo 'Повторіть пароль: ' . $confirm_password . '<br>';
    echo 'Коментар: ' . $comment . '<br>';
    echo 'Стать: ' . $gender . '<br>';
    echo 'Улюблений колір:' . $color . '<br>';
    echo 'Підтверджую' . $agree . '<br>';
    ?>
<?php endif; ?>


</body>
</html>
