<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['delete_file'])) {


    $fileDelete = $_POST['delete_file'];

    if (file_exists($fileDelete)) {
        unlink($fileDelete);
    }
}