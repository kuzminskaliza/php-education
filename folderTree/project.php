<?php
include 'updateGitignore.php';
include 'updateDirectories.php';
include 'downloadFile.php';
include 'deleteFileValidation.php';
include 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Структура папок</title>
    <link rel="stylesheet" href="styleForFile.css">
</head>
<body>
<h2>Структура файлів і папок</h2>
<form action="" method="post" enctype="multipart/form-data">
    <input type="submit" value="Зберегти" style="position: fixed; float: left; cursor: pointer">
    <?php treeFiles($_SERVER['DOCUMENT_ROOT']); ?>
</form>


</body>
</html>