<!DOCTYPE html>
<html lang="en">
<body>
<?php

$targetDir = 'uploads/';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $files = $_FILES['file'];
    $uploadOk = 1;

    foreach ($files['name'] as $key => $name) {
        $targetFile = $targetDir . basename($name);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $fileSize = $files['size'][$key];
        $tmpName = $files['tmp_name'][$key];


        if (file_exists($targetFile)) {
            echo 'Файл ' . htmlspecialchars($name) . ' вже був надісланий, ';
            $uploadOk = 0;
        }

        if ($fileSize > 500000) {
            echo 'Занадто великий обʼєм файлу ' . htmlspecialchars($name);
            $uploadOk = 0;
        }

        if (!in_array($fileType, ['jpg', 'jpeg', 'gif', 'png'])) {
            echo ' Не вірний формат, ' . htmlspecialchars($name);
            $uploadOk = 0;
        }

        if ($uploadOk) {
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0777, true);
            }
            if (move_uploaded_file($tmpName, $targetFile)) {
                echo 'Файл ' . htmlspecialchars($name) . ' був успішно завантажений.';
            } else {
                echo 'Виникла помилка при завантаженні файлу ' . htmlspecialchars($name);
            }
        } else {
            echo 'файл ' . htmlspecialchars($name) . ' не був завантажений';
            $uploadOk = 1;
        }
    }
}
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="file">Виберіть файл</label>
    <input type="file" name="file[]" id="file" accept=".png, .jpg, .jpeg, .gif" multiple>
    <br><br>
    <input type="submit" value="Відправити" name="submit">
</form>

</body>
</html>

