<?php 

$arr = ['Python','Php', 'Ruby'];

$retorno = preg_grep('/Php/', $arr);

print_r($retorno);