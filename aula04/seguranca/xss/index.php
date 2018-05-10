<form method="POST">
	<input type="text" name="comentario">
	<input type="submit" value="Ok">
</form>

<?php 

if ($_POST) {

	// Errado
	// echo $_POST['comentario'];
	// Correto
	echo strip_tags($_POST['comentario']);
}