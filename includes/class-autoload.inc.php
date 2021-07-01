<?php
spl_autoload_register('myAutoLoader');
function myAutoLoader($className)
{


    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (strpos($url, 'includes') !== false) {
        $path = '../classes/';
    } else {
        $path = 'classes/';
    }

    $extension = '.class.php';
    $fullpath = $path . $className . $extension;
    require_once $fullpath;
}
