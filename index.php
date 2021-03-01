<?php


ini_set('display_errors',1);
//жизнь сессии (1 день)
ini_set('session.gc_maxlifetime', 86400 );
ini_set('session.cookie_lifetime', 86400 );

error_reporting(E_ALL);
session_start();

// Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');

function debug($value){
    echo '<pre>';
    var_dump($value);
    exit();

}

// Вызов Router
$router = new Router();

$router->run();

//as
?>
