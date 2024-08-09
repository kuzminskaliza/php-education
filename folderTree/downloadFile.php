<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES['download_files'])) {
    $files = $_FILES['download_files'];


    //validate count 10
    //validate > 5mb
    // set permission 755 to php file


    if (validate($files)) {


        foreach ($files['tmp_name'] as $dir => $tmpFiles) {

            foreach ($tmpFiles as $keyFile => $file) {
                if (empty($file)) {
                    break;
                }

                $fileExt = pathinfo($files['name'][$dir][$keyFile], PATHINFO_EXTENSION);
                $fileName = 'cron-' . date('Y-m-d_H:i:s') . '-' . uniqid() . '.' . $fileExt;
                $fileDestination = $dir . '/' . $fileName;
                $result = move_uploaded_file($file, $fileDestination);


            }
        }

    } else {
        return 'помилка форми';
    }
}
function validate(array $files): bool
{
    $sizeFiles = $files['size'];

    foreach ($sizeFiles as $arrayFileSize) {
        if (count($arrayFileSize) > 5) {
            return false;

        }
        foreach ($arrayFileSize as $size) {
            if ($size > 3 * 1024 * 1024) {
                return true;
            }
        }

    }

    return true;
}