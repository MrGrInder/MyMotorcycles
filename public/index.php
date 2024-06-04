<?php

require_once '../vendor/autoload.php';

use Core\Controller;

$config = require_once '../config/application.php';

Controller::init($config);

$controllerName = 'Auth';
$actionName = 'index';

if (!empty($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] !== '/') {
    [$controllerName, $request] = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
    [$actionName] = explode('?', $request);
}

$controllerClassName = "app\\{$controllerName}\\Controllers\\{$controllerName}Controller";
$controller = new $controllerClassName();
$controller->$actionName();
