<?php 

var_dump(filter_var('\n\n\n\nlucas@lucas.com\n\n\n\n',FILTER_SANITIZE_EMAIL));
echo "<br>";
var_dump(filter_var('lucas  @lucas.com',FILTER_SANITIZE_EMAIL));
echo "<br>";
var_dump(filter_var('<script>alert("asdsd")</script>',FILTER_SANITIZE_EMAIL));
echo "<br>";

echo $_GET['id'] ?? null;
echo filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);