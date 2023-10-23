<?php

$_CONFIG['FILES'] = require dirname(__DIR__). DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'filesystems.php';
$_CONFIG['DATABASE'] = require dirname(__DIR__). DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'database.php';
global $_CONFIG;

require_once $_CONFIG['FILES']['MODELS'].DIRECTORY_SEPARATOR.'PerroModel.php';
require_once $_CONFIG['FILES']['CONTROLLERS'].DIRECTORY_SEPARATOR.'RouteController.php';
require_once $_CONFIG['FILES']['CONTROLLERS'].DIRECTORY_SEPARATOR.'AnimalController.php';
require_once $_CONFIG['FILES']['HELPERS'].DIRECTORY_SEPARATOR.'helpers.php';

$routeController = new RouteController(new AnimalController(new PerroModel($_CONFIG['DATABASE']['SERVER'], $_CONFIG['DATABASE']['DATABASE'],$_CONFIG['DATABASE']['USER'],$_CONFIG['DATABASE']['PASSWORD'])));

$routeController->execute();
?>