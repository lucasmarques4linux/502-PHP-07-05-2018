<?php 

require '../config/config.php';
require '../vendor/autoload.php';
require '../routes/route.php';

session_start();

use Lib\FrontController\FrontController;

$app = new FrontController();

$app->setRoutes($routes);
$app->run();
