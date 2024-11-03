<?php
session_start();
use classes\Router;
use classes\Db;
use classes\DataBase;


require dirname(__DIR__) . '/config/config.php';
require COMPOSER . '/autoload.php';
require CORE . '/function.php';



$db_config = require CONFIG . '/db.php';
//$db = new Db($db_config);
$db = new DataBase($db_config);



//создаем объект класса роутер
$router = new Router();
require CONFIG . '/routs.php';
$router->match();



