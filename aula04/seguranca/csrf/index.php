<?php session_start() ?>

<?php $_SESSION['csrf_token'] = md5(uniqid(rand(),true)) ?>

<form method="POST" action="processa.php">
	<input type="hidden" name="csrf" value="<?=$_SESSION['csrf_token']?>">
	<input type="text" name="comentario">
	<input type="submit" value="Ok">
</form>
