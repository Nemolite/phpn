<?php
// вывод ошибок
error_reporting(E_ALL);
ini_set('display_errors',true);

// Определяем константы
define("APP_DIR", $_SERVER['DOCUMENT_ROOT']);
define("CLASSEAS_DIR", $_SERVER['DOCUMENT_ROOT'] . '/classes/');
define("VIEW_DIR", $_SERVER['DOCUMENT_ROOT'] . '/pages/');

// helpers
function show($output){
    echo "<pre>";
    print_r($output);
    echo "</pre>";
}

// Автозагрузка классов
function autoload($className)
{
    include CLASSEAS_DIR . $className . '.php';
}
spl_autoload_register('autoload');

$router = new Router();
show($router);
var_dump($router);


