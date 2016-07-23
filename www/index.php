<?php
// подключение файла конфигурации и файла общих функций
include_once '../config/config.php';
include_once '../librery/mainFunctions.php';

// определение имени контроллера, который будет вызываться
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

// определение имени функции, которая будет выполняться
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

loadPage($controllerName, $actionName);
