<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма для реєстрації</title>
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

$nameErr = $emailErr = $ageErr = $dateErr = $websiteErr = $phoneErr = $passwordErr = $confirmPasswordErr = $commentErr = $genderErr = $colorErr = $agreeErr = '';
$name = $email = $age = $date = $website = $phone = $password = $confirmPassword = $comment = $gender = $color = $agree = '';
$nameClass = $emailClass = $ageClass = $dateClass = $websiteClass = $phoneClass = $passwordClass = $confirmPasswordClass = $commentClass = $genderClass = $colorClass = $agreeClass = '';

function clearBadSymbols(string $data): string
{
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $nameErr = 'Імʼя обовʼязкове';
        $nameClass = 'input-error';
    } else {
        $name = clearBadSymbols($_POST['name']);
        $nameClass = 'input-success';
    }
    if (empty($_POST['email'])) {
        $emailErr = 'Електронна пошта обовʼязкова';
        $emailClass = 'input-error';
    } else {
        $email = clearBadSymbols($_POST['email']);
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
        $age = clearBadSymbols($_POST['age']);
        if (!is_numeric($age) || $age < 18 || $age > 100) {
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
        $date = clearBadSymbols($_POST['date']);
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
        $website = clearBadSymbols($_POST['website']);
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
        $phone = clearBadSymbols($_POST['phone']);
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
        $password = clearBadSymbols($_POST['password']);
        if (strlen($password) < 8) {
            $passwordErr = 'Пароль має містити найменше 8 символів';
            $passwordClass = 'input-error';
        } else {
            $passwordClass = 'input-success';
        }
    }
    if (empty($_POST['confirmPassword'])) {
        $confirmPasswordErr = 'Підтвердіть пароль';
        $confirmPasswordClass = 'input-error';
    } else {
        $confirmPassword = clearBadSymbols($_POST['confirmPassword']);
        if ($confirmPassword !== $password) {
            $confirmPasswordErr = 'Не правильно вказаний пароль';
            $confirmPasswordClass = 'input-error';
        } else {
            $confirmPasswordClass = 'input-success';
        }
    }

    if (empty($_POST['comment'])) {
        $commentErr = 'Коментар обовʼязковий';
        $commentClass = 'input-error';
    } else {
        $comment = clearBadSymbols($_POST['comment']);
        if (strlen($comment) < 10) {
            $commentErr = 'Коментар має містити найменше 10 символів';
            $commentClass = 'input-error';
        } else {
            $commentClass = 'input-success';
        }
    }

    if (empty($_POST['gender'])) {
        $genderErr = 'Вкажіть стать';
        $genderClass = 'input-error';
    } else {
        $gender = clearBadSymbols($_POST['gender']);
        $genderClass = 'input-success';
    }

    if (empty($_POST['color'])) {
        $colorErr = 'Оберіть колір';
        $colorClass = 'input-error';
    } else {
        $color = clearBadSymbols($_POST['color']);
        $colorClass = 'input-success';
    }

    if (empty($_POST['agree'])) {
        $agreeErr = 'Підтвердження обовʼязкове';
        $agreeClass = 'input-error';
    } else {
        $agree = clearBadSymbols($_POST['agree']);
        $agreeClass = 'input-success';
    }

    $arr = [$nameErr, $emailErr, $ageErr, $dateErr, $websiteErr, $phoneErr, $passwordErr, $confirmPasswordErr, $genderErr, $colorErr, $agreeErr];

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
            <label for="name">Імʼя:</label>
                <input type="text" id="name" name="name" value="<?php echo $name; ?>">
            <span class="error"><?php echo $nameErr; ?></span>
        </div>
        <br><br>
        <div class="form-input <?php echo $emailClass; ?>">
            <label for="email">Електронна пошта:</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span>
        </div>
        <br><br>
        <div class="form-input <?php echo $ageClass; ?>">
            <label for="age">Вік:</label>
                <input type="number" id="age" name="age" value="<?php echo $age; ?>">
            <span class="error"><?php echo $ageErr; ?></span>
        </div>
        <br> <br>
        <div class="form-input <?php echo $dateClass; ?>">
            <label for="date">Дата народження:</label>
                <input type="date" id="date" name="date" value="<?php echo $date; ?>">
            <span class="error"><?php echo $dateErr; ?></span>
        </div>
        <br> <br>
        <div class="form-input <?php echo $websiteClass; ?>">
            <label for="website">Вебсайт:</label>
                <input type="text" id="website" name="website" value="<?php echo $website; ?>">
            <span class="error"><?php echo $websiteErr; ?></span>
        </div>
        <br><br>
        <div class="form-input <?php echo $phoneClass; ?>">
            <label for="phone">Номер телефону:</label>
                <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>">
            <span class="error"><?php echo $phoneErr; ?></span>
        </div>
        <br><br>
        <div class="form-input <?php echo $passwordClass; ?>">
            <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" value="<?php echo $password; ?>">
            <span class="error"><?php echo $passwordErr; ?></span>
        </div>
        <br><br>
        <div class="form-input <?php echo $confirmPasswordClass; ?>">
            <label for="confirmPassword">Повторіть пароль:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" value="<?php echo $confirmPassword; ?>">
            <span class="error"><?php echo $confirmPasswordErr; ?></span>
        </div>
        <br><br>
        <div class="form-input <?php echo $commentClass; ?>">
            <label for="comment">Коментар:</label>
                <textarea id="comment" name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
            <span class="error"><?php echo $commentErr; ?></span>
        </div>
        <br><br>
        <div class="form-input <?php echo $genderClass; ?>">
            <label for="gender">Стать:</label>
            <input type="radio" id="gender-female" name="gender" <?php echo $gender == 'female' ? 'checked' : ''; ?> value="female">
            <label for="gender-female">Жінка</label>
                <input type="radio" id="gender-male" name="gender" <?php echo $gender == 'male' ? 'checked' : ''; ?> value="male">
            <label for="gender-male">Чоловік</label>
                <input type="radio" id="other" name="gender" <?php echo $gender == 'other' ? 'checked' : ''; ?> value="other">
            <label for="other">Інше</label>
            <span class="error"><?php echo $genderErr; ?></span>
        </div>
        <br><br>
        <div class="form-input <?php echo $colorClass; ?>">
            <label>Улюблений колір </label>
            <select name="color">
                <option value="" <?php if (empty($color)) echo 'selected'; ?>>Оберіть колір</option>
                <option value="red" <?php if ($color === 'red') echo 'selected'; ?>>Червоний</option>
                <option value="blue" <?php if ($color === 'blue') echo 'selected'; ?>>Синій</option>
                <option value="green" <?php if ($color === 'green') echo 'selected'; ?>>Зелений</option>
                <option value="yellow" <?php if ($color === 'yellow') echo 'selected'; ?>>Жовтий</option>
            </select>
            <span class="error"><?php echo $colorErr; ?></span>
        </div>
        <br> <br>
        <div>
            <label for="agree">Погоджуюсь на опрацювання моїх персональних даних</label>
                <input type="checkbox" id="agree" name="agree" <?php if ($agree) echo 'checked'; ?>>
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
    echo 'Коментар: ' . $comment . '<br>';
    echo 'Стать: ' . $gender . '<br>';
    echo 'Улюблений колір:' . $color . '<br>';
    echo 'Підтверджую' . $agree . '<br>';
    ?>
<?php endif; ?>


</body>
</html>
