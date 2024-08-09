<?php
if (isset($_POST['deleteFile']) && isset($_POST['delete_file'])) {
    $fileDelete = $_POST['delete_file'];

    if (file_exists($fileDelete)) {
        unlink($fileDelete);
    }
}