<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['gitignore'])) {
    foreach ($_POST['gitignore'] as $dir => $content) {
        $contentBefore = file_get_contents($dir . '/.gitignore');
        $contentAfter = str_replace("\r", "", $content);
        if ($contentBefore != $contentAfter) {
            file_put_contents($dir . '/.gitignore', $contentAfter);
        }

    }

}

