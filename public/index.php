<?php

require_once '../vendor/autoload.php';

use core\Controller;
use Smarty\Smarty;

$config = require_once '../config/application.php';
$database = require_once '../config/database.php';
$smartyConfigs = require_once '../config/smarty.php';

Controller::init($config, $database);

$controllerName = 'Auth';
$actionName = 'login';

if (!empty($_GET['controller'])) {
    $controllerName = $_GET['controller'];
}

if (!empty($_GET['action'])) {
    $actionName = $_GET['action'];
}

$controllerClassName = 'app\\Controllers\\'. $controllerName. 'Controller';
$controller = new $controllerClassName();
$controller->$actionName();

$smarty = new Smarty();

foreach ($smartyConfigs as $key => $value) {
    $smarty->setConfigDir(__DIR__. '/configs/');
    $smarty->setTemplateDir($value);
}

$smarty->setCompileDir($smartyConfigs['compile_dir']);
$smarty->setCacheDir($smartyConfigs['cache_dir']);
$smarty->setDebugging($smartyConfigs['debugging']);
