<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cone</title>
</head>
<body>
<form action="<?= $_SERVER['PHP_SELF']?>" method="post">

<h1>Cone Reto</h1>
<label for="alturaCone"><strong>Altura do Cone </strong></label>
<input type="text" name="alturaCone" placeholder="Digite o número aqui..." >
<br><label for="raioCone"><strong>Raio Cone </strong></label>
<input type="text" name="raioCone" placeholder="Digite o número aqui..." ><br>
<input type="submit" value="Calcular Volume">


</form>
    
<?php


$pi = M_PI;

$alturaCone = isset($_REQUEST['alturaCone']) ? (float)$_REQUEST['alturaCone'] : null;
$raioCone = isset($_REQUEST['raioCone']) ? (float)$_REQUEST['raioCone'] : null;

if (isset($_REQUEST['alturaCone']) && isset($_REQUEST['raioCone'])) {

    $volumeCone = (1/3) * $pi * pow($raioCone, 2) * $alturaCone;
    
    echo "O volume do seu cone em m3 é: $volumeCone";
    }

?>

<a href="menu.php">
    <button>Voltar para o menu</button></a>

</body>
</html>