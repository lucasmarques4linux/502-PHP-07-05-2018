<?php 

ini_set('soap.wsdl_cache_enabled', 0);

$soapClient = new SoapClient('users.wsdl');

echo $soapClient->list();