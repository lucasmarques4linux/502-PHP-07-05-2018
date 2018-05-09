<form method="POST">
	<p>CEP:</p>
	<p><input type="text" name="cep"></p>
	<p><input type="submit" value="Buscar Endereço"></p>
</form>
<?php 


if ($_POST) {
	
	$cep = $_POST['cep'];

	$cep = str_replace('-', '', $cep);

	$url = "https://viacep.com.br/ws/{$cep}/json/";

	$curl = curl_init();

	curl_setopt($curl, CURLOPT_URL, $url);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$retorno = curl_exec($curl);

	curl_close($curl);

	$end = json_decode($retorno);
}

?>

<?php if (isset($end)): ?>
	<p><strong>Rua:</strong> <?=$end->logradouro ?></p>
	<p><strong>Bairro:</strong> <?=$end->bairro ?></p>
	<p><strong>Cidade:</strong> <?=$end->localidade ?></p>
	<p><strong>Estado:</strong> <?=$end->uf ?></p>
<?php endif ?>