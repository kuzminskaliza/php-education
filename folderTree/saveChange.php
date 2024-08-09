<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['gitignore'])) {
        file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/.gitignore', $_POST['gitignore']);
}
