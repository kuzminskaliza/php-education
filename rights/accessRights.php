<?php


$file = 'rights/accessRights';

chmod($file, 0755);


if (is_readable($file)){
    echo 'Файл доступний для читання ';
} else {
    echo 'Файл недоступний для читання ';
}


if (is_writable($file)){
    echo 'Файл доступний для запису';
} else {
    echo 'Файл недоступний для запису';
}

if (is_executable($file)){
    echo 'Файл доступний для виконання';
} else {
    echo 'Файл недоступний для виконання';
}

chgrp($file, 'groupname');

chown($file, 'username');

umask(0755);