<?php

echo 'Привіт, ви успішно підключились';

echo '<br>';

$dsn = 'pgsql:host=postgres;port=5432;dbname=postgresql_test';
$user = '****';
$password = '****';

try {
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    $stmt = $pdo->query('SELECT * FROM students');
    $students = $stmt->fetchAll();

    echo '<h3>Список всіх студентів: </h3>';
    echo '<table border="1" cellpadding="5" cellspacing="0">';
    echo '<tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
            <th>Favorite Color</th>
            <th>Pet</th>
         </tr>';

    foreach ($students as $student) {
        echo "<tr>
                <td>{$student['firstname']}</td>
                <td>{$student['lastname']}</td>
                <td>{$student['age']}</td>
                <td>{$student['favoritecolor']}</td>
                <td>{$student['pet']}</td>
              </tr>";
    }

    echo '</table>';
} catch (PDOException $e) {
    echo 'Помилка підключення: ' . $e->getMessage();
}