<?php 

echo '<pre>';

$cpf = '111.222.333-44 878.125.244-77 582.672.216-97 785.862.747-39 661.838.641-10 253.413.668-24';

$regex = '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/';

echo " CPF: ";

$retorno = preg_match($regex, $cpf,$params);

if ($retorno) {
	echo 'Válido';
} else {
	echo 'Inválido';
}

echo '<hr>';

 // AAA-1111

$placa = 'AAA-1111';

$regex = '/^[A-Z]{3}-[0-9]{4}$/';

echo 'Placa: ';

$retorno = preg_match($regex, $placa,$params);

if ($retorno) {
	echo 'Válido';
} else {
	echo 'Inválido';
}

echo '<hr>';
//97.772.393/0001-93
$cnpj = '97.772.393/0001-93';

$regex = '/^[0-9]{2}\.[0-9]{3}\.[0-9]{3}\/[0-9]{4}-[0-9]{2}$/';

echo 'Cnpj: ';

$retorno = preg_match($regex, $cnpj,$params);

if ($retorno) {
	echo 'Válido';
} else {
	echo 'Inválido';
}

echo '<hr>';
// (11)91111-2222

$cel = '(11)91111-2222';

$regex = '/\([0-9]{2}\)[0-9]{4,5}-[0-9]{4}/';

echo 'Celular: ';

$retorno = preg_match($regex, $cel,$params);

if ($retorno) {
	echo 'Válido';
} else {
	echo 'Inválido';
}