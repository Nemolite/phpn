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

// Получение и обратока GET - запроса
if($_SERVER['REQUEST_URI']!==''){
    $path = mb_substr($_SERVER['REQUEST_URI'],1);
}
if($_SERVER['REQUEST_URI']==='/') {
    $path ='/';
}

// настройка роутера
$router = new Router();
$router->setRouters('/','home.php');
$router->setRouters('contact','contact.php');
$router->setRouters('onas','onas.php');
$router->setRouters('portfolio','portfolio.php');

// Роутинг
$router->getRouters($path);