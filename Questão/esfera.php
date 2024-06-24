<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esfera</title>
</head>
<body>
    
<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
<label for="raioEsfera"><strong>Raio da Esfera </strong></label>
<input type="text" name="raioEsfera" placeholder="Digite o número aqui..."><br>
<input type="submit" value="Calcular Volume">
</form>

<?php

$pi = M_PI;

$raioEsfera = isset($_REQUEST['raioEsfera']) ? (float)$_REQUEST['raioEsfera'] : null;
$volumeEsfera = null;

if (isset($_REQUEST['raioEsfera'])) {
    $volumeEsfera = (4/3) * $pi * pow($raioEsfera, 3);
    echo "O volume da sua esfera em m3 é: $volumeEsfera";
}

?>


<a href="menu.php">
    <button>Voltar para o menu</button></a>
</body>
</html>