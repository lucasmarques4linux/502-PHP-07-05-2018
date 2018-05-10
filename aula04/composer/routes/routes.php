<?php 

$app->get('/',function(){
	return 'Olá';
});

$app->get('/ola',function(){
	return \App\Controller\HomeController\HomeController::ola();
});