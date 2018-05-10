<?php 

require_once dirname(__DIR__).'/vendor/autoload.php';

$app = new Silex\Application();

require_once dirname(__DIR__).'/routes/routes.php';

$app->run();
