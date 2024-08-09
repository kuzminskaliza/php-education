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
