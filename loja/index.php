<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Loja</title>
</head>

	<?php require_once('menu.php'); ?>


<h1 aling="center"> Lojinha 2024/1</h1>

<?php

	if( isset($_REQUEST["usuarioInvalido"])){
		echo"<script> alert('E-mail ou Senha incorretos!'); </script>";
	}

?>
</body>
</html>