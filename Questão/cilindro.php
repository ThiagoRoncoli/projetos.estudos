<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cilindro</title>
</head>
<body>

<?php

$pi = M_PI;

$alturaCilindro = isset($_REQUEST['alturaCilindro']) ? (float)$_REQUEST['alturaCilindro'] : null;
$raioCilindro = isset($_REQUEST['raioCilindro']) ? (float)$_REQUEST['raioCilindro'] : null;
$volumeCilindro = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST"){


if (isset($_REQUEST['alturaCilindro']) && isset($_REQUEST['raioCilindro'])) {
    $volumeCilindro = $pi * pow($raioCilindro, 2) * $alturaCilindro;
    echo "O volume do seu cilindro em m3 é: $volumeCilindro";

}

}else{

?>

<form action="<?= $_SERVER['PHP_SELF']?>" method="post">

<h1>Cilíndro</h1>
<label for="alturaCilindro"><strong>Altura Cilindro </strong></label>
<input type="text" name="alturaCilindro" placeholder="Digite o número aqui..." >
<br><label for="raioCilindro"><strong>Raio Cilindro </strong></label>
<input type="text" name="raiocilindro" placeholder="Digite o número aqui..." ><br>
<input type="submit" value="Calcular Volume">
</form>

<?php } ?>

<a href="menu.php">
    <button>Voltar para o menu</button></a>
    
</body>
</html>