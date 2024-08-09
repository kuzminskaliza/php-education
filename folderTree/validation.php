<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $files = $_FILES['file'];
    $uploadDir = $_POST['upload_dir'];
    $maxSize = 5 * 1024 * 1024; // 5МВ

    foreach ($files['name'] as $key => $name) {
        $fileSize = $files['size'][$key];
        $fileTmp = $files['tmp_name'][$key];
        $fileExt = pathinfo($name, PATHINFO_EXTENSION);
        $destination = $uploadDir['key'] . '/' . $name;


        if ($fileSize < $maxSize) {
            if (move_uploaded_file($fileTmp, $destination)) {
                echo 'Файл ' . htmlspecialchars($name) . ' завантажено';
            } else {
                echo 'Файл ' . htmlspecialchars($name) . ' не завантажено';
            }
        }

    }

}
