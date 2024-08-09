<?php
function icon(string $definitionIcons): string
{
    $iconPath = 'imgs/';
    switch ($definitionIcons) {
        case 'txt':
            return '<img src="' . $iconPath . 'txt.png" class="file-icon">';
        case 'json':
            return '<img src="' . $iconPath . 'json.png" class="file-icon">';
        case 'php':
            return '<img src="' . $iconPath . 'php.png" class="file-icon">';
        case 'css':
            return '<img src="' . $iconPath . 'css.png" class="file-icon">';
        case 'jpg':
        case 'jpeg':
        case 'png':
        case 'gif':
            return '<img src="' . $iconPath . 'image.png" class="file-icon">';
        case 'md':
            return '<img src="' . $iconPath . 'md.png" class="file-icon">';
        default:
            return '<span class="file-icon">&#128196;</span>';
    }
}
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
                $input = '<input type="text" name="dir[' . $path . ']" value="' . htmlspecialchars($item) . '">';

                $input .= '<label for="' . $path . '" class="file-label"><span class="icon"></span></label>';
                $input .= '<input id=""' . $path . ' type="file" name="download_files[' . $path . '][]"  multiple>';


                $icon = '<img src="imgs/folder.png" alt="" class="folder-icon">';
            } else {
                $definitionIcons = pathinfo($item, PATHINFO_EXTENSION);
                $icon = icon($definitionIcons);

                if ($item === '.gitignore') {
                    $input = htmlspecialchars($item);
                    $content = file_get_contents($path);
                    $input .= '<textarea name="gitignore[' . $dir . ']" cols="20" rows="7" style="margin-left: 120px">' . htmlspecialchars($content) . '</textarea>';
                }else {
                    $input .= '<button type="submit" name="delete_file" value="'. $path .'">X</button>';
                }

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


