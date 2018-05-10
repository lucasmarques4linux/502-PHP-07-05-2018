<?php 

$pass1 = password_hash('123', PASSWORD_BCRYPT);
$pass2 = password_hash('123', PASSWORD_BCRYPT);

echo $pass1;
echo '<br>';
echo $pass2;
echo '<hr>';

if (password_verify('123',$pass1)) {
	echo 'Ok';
}else {
	echo 'Fail';
}