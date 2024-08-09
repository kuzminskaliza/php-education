<?php
include 'saveChange.php';
include 'validation.php';
include 'icons.php';
include 'deleteFileValidation.php';


function treeFiles(string $dir): void
{
    $items = scandir($dir);
    echo "<ul>";
    foreach ($items as $item) {
        $content = file_get_contents($dir . '/.gitignore');
        $excludedFiles = explode("\n", $content);
        if (!in_array($item, $excludedFiles) && $item != '.' && $item != '..') {
            $input = $item;
            $path = $dir . '/' . $item;
            if (is_dir($path)) {
                $input = '<input type="text" name="file" value="' . htmlspecialchars($item) . '">';
                $input .= '<input type="hidden" name="file[]" value="' . htmlspecialchars($path) . '">';
                $input .= '<input type="file" name="upload_dir[]"  multiple>';
                $icon = '<img src="imgs/folder.png" alt="" class="folder-icon">';
            } else {
                $definitionIcons = pathinfo($item, PATHINFO_EXTENSION);
                $icon = icon($definitionIcons);

                if ($item === '.gitignore') {
                    $input = htmlspecialchars($item);
                    $content = file_get_contents($path);
                    $input .= '<textarea name="gitignore" cols="20" rows="7" style="margin-left: 120px">' . htmlspecialchars($content) . '</textarea>';
                }
                $input .= '<input type="hidden" name="delete_file" value="'. htmlspecialchars($path) .'">';
                $input .= '<button type="submit" name="deleteFile">X</button>';
            }
            echo "<li>" . $icon . " " . $input;
            if (is_dir($path)) {
                treeFiles($path);
            }
            echo "</li>";

        }
    }
    echo "</ul>";
}
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
    <input type="submit" value="Зберегти" name="save">
    <?php treeFiles($_SERVER['DOCUMENT_ROOT']); ?>
</form>


</body>
</html>