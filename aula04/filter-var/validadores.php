<?php 

var_dump(filter_var('\n\n\n\nlucas@lucas.com\n\n\n\n',FILTER_VALIDATE_EMAIL));
echo "<br>";
var_dump(filter_var('lucas  @lucas.com',FILTER_VALIDATE_EMAIL));
echo "<br>";
var_dump(filter_var('lucas@lucas.com',FILTER_VALIDATE_EMAIL));
echo "<br>";
var_dump(filter_var('http://lucas.com',FILTER_VALIDATE_URL));
echo "<br>";
var_dump(filter_var('lucas@lucas.com',FILTER_VALIDATE_URL));
echo "<br>";