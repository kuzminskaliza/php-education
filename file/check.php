<?php

$folder = 'file/example_folder';

if (is_dir($folder)) {
    $files = array_diff(scandir($folder), ['.', '..']);
    echo "$folder:\n" . implode("\n", $files);;
}
