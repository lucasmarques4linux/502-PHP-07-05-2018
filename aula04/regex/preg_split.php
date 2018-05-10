<?php 

$string = 'col1;col2,col3/col4';

$cols = preg_split('/;|,|\//', $string);

print_r($cols);

echo '<hr>';

$data = "10-05-2018 11:13:12";

$cols = preg_split('/(\-|:|\s)/', $data);

print_r($cols);