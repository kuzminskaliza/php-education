<?php

const PROJECT_DIR = '/var/www/php-education';
function treeFiles(string $dir): void
{
    $items = scandir($dir);
    foreach ($items as $item) {
        $excludedFiles = [];
        $gitignore = $dir . '/.gitignore';
        if (file_exists($gitignore)) {
            $content = file_get_contents($dir . '/.gitignore');
            $excludedFiles = explode("\n", $content);
        }


        if (!in_array($item, $excludedFiles) && $item != '.' && $item != '..') {
            $path = $dir . '/' . $item;
            if (is_dir($path)) {
                if (is_dir($path)) {
                    treeFiles($path);
                } else {
                    if (strpos($item, 'cron-') === 0){
                        unlink($path);
                    }
                }
            }

        }

    }
}

treeFiles(PROJECT_DIR);