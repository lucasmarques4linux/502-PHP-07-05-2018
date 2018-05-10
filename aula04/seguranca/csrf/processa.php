<?php 
session_start();

if ($_POST) {
	
	if (isset($_POST['csrf']) && ($_POST['csrf'] == $_SESSION['csrf_token'])) {
		echo 'Processando';
	}else {
		echo 'Erro';
	}
}