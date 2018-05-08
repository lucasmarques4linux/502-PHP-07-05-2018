<?php 

$xml = new SimpleXmlElement('<?xml version="1.0" encoding="UTF-8"?><usuarios></usuarios>');

$xml->addChild('usuario');

header('Content-type: text/xml');

echo $xml->asXML();