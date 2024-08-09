<?php

$folder = 'file/example_folder';
$filePage = $folder . '/example.txt';
$txt = 'Це текст у файлі, який знаходиться в папці.';

if (!is_dir($folder)){
    mkdir($folder);
}

file_put_contents($filePage, $txt);

