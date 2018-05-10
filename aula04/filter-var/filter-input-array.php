<?php 

$args = array(
    'id'   => FILTER_VALIDATE_INT,
    'name' => FILTER_SANITIZE_STRING,
    'email' => FILTER_VALIDATE_EMAIL,
);

$myinputs = filter_input_array(INPUT_GET, $args);

var_dump($myinputs);