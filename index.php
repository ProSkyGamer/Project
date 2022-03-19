<?php
//FRONT CONTROLLER

//1. Общие настройки
ini_set('display_errors',0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


//2.Подлкючение файлов системы
define('ROOT',dirname(__FILE__));
require_once ROOT.'/components/Router.php';
session_start();
$conrollerName=$_SESSION['controllername'];
//echo($conrollerName);
if ($conrollerName=="LoginController"){
require_once 'components/Login.php';}
require_once 'components/NextQuestion.php';
//if ($conrollerName=="CreatetestController"){
//    require_once 'components/CreateTest.php';}
//3.Установка соединения с БД

$mySqli = new mysqli("localhost","root","","testing");
        if ($mySqli->connect_errno)
        {
            return "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . " )" . $mysqli->connect_error;
			die("Ошибка при подключении к базе данных");
        }

//4.Вызов Router

$router=new Router();
$router->run();
?>