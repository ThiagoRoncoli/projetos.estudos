<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule seu IMC</title>

</head>

<body>
<form action="<?= $_SERVER['PHP_SELF']?>" method="post">

<label for="peso"><strong>Peso</strong></label>
<input type="text" name="peso" placeholder="Digite seu peso..." required>

<label for="altura"><strong>Altura</strong></label>
<input type="text" name="altura" placeholder="Digite sua altura..." required>

<input type="submit" value="Calcular">

</form>

<?php


$peso = $_POST["peso"] ?? 0;
$altura = $_POST["altura"] ?? 0;



$imc = $peso / ($altura * $altura);

$classificacao = $imc;

$classificacao = number_format($classificacao, 2, '.', ',');


if($imc <= 18.5 ){
    echo"Você está com Magreza! Com o valor do IMC: $classificacao.";

}else if($imc >= 18.5 && $imc < 25 ){
    echo"Você está com o Peso Normal! Com o valor do IMC: $classificacao.";

}else if($imc >= 25 && $imc < 29.9 ){
    echo"Você está com sobrepeso! Com o valor do IMC: $classificacao.";

}else if($imc >= 29.9 && $imc <30){
    echo"Você está com obesidade! Com o valor do IMC: $classificacao.";
}

?>

</body>
</html>