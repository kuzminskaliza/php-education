<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dir'])) {
    foreach ($_POST['dir']as $path => $value) {
        $arrayDirectories = explode('/', $path);
        $lastKeyArray = count($arrayDirectories) - 1;
        $arrayDirectories[$lastKeyArray] = $value;


        $dirNameBefore =  $path;
        $dirNameAfter = implode('/', $arrayDirectories);
       if ($dirNameBefore != $dirNameAfter){
           $result = rename($dirNameBefore, $dirNameAfter);
       }
    }

}

