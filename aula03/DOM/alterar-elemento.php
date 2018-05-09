<?php 
echo '<pre>';
$dom = new DOMDocument();
$dom->load('apostilas.xml');

// Localizando Elemento

$titulo = $dom->getElementsByTagName('titulo');

print_r($titulo);

// Alterando o Titulo

// var_dump($titulo->item(0));

$titulo->item(0)->nodeValue = 'Dominando PHP';

// Salva o arquivo

$dom->save('apostilas.xml');

print_r($dom->saveXML());