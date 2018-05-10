<?php 

echo '<pre>';

$cpf = '111.222.333-44 878.125.244-77 582.672.216-97 785.862.747-39 661.838.641-10 253.413.668-24';

$regex = '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/';

echo " CPF: ";

$retorno = preg_match_all($regex, $cpf,$params);
var_dump($retorno);
var_dump($params);
if ($retorno) {
	echo 'Válido';
} else {
	echo 'Inválido';
}