<?php 

$cpf = '11122233344';

$regex = '/([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})/';

echo preg_replace($regex, '\1.\2.\3-\4', $cpf);

echo '<hr>';

$string = 'Palmeiras tem Mundial';

echo preg_replace('/palmeiras/i', 'Corinthians', $string);

echo '<hr>';

$cpf = '111.222.333-44';

echo preg_replace('/(\.|\-)/', '', $cpf);

echo '<hr>';

$cpf = '111.222.333-44';

echo preg_replace('/([^0-9])/', '', $cpf);

echo '<hr>';

$cnpj = '97.772.393/0001-93';

echo preg_replace('/(\.|\-|\/)/', '', $cnpj);

echo '<hr>';

$cnpj = '97.772.393/0001-93';

echo preg_replace('/([^0-9])/', '', $cnpj);