<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calculador</title>
</head>

<body>


<table border="1">

<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
<h1>Cone Reto</h1>
<label for="v1"><strong>Altura do Cone </strong></label>
<input type="text" name="v1" placeholder="Digite o número aqui..." >
<br><label for="v2"><strong>Raio Cone </strong></label>
<input type="text" name="v2" placeholder="Digite o número aqui..." ><br>
<input type="submit" value="Calcular Volume">

<hr>

<br>
<h1>Cilíndro</h1>
<label for="v1"><strong>Altura Cilíndro </strong></label>
<input type="text" name="v1" placeholder="Digite o número aqui..." >
<br><label for="v2"><strong>Raio Cilíndro </strong></label>
<input type="text" name="v2" placeholder="Digite o número aqui..." ><br>
<input type="submit" value="Calcular Volume">

<hr>

<br>
<h1>Esfera</h1>
<label for="v3"><strong>Raio da Esfera </strong></label>
<input type="text" name="v3" placeholder="Digite o número aqui..."><br>
<input type="submit" value="Calcular Volume">

</form>
</table>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

$v1 = isset($_POST["v1"]) ? $_POST["v1"] : null;
$v2 = isset($_POST["v2"]) ? $_POST["v2"] : null;
$v3 = isset($_POST["v3"]) ? $_POST["v3"] : null;
$operacao1 = isset($_POST['operacao1']) ? $_POST['operacao1'] : null;
$operacao2 = isset($_POST['operacao2']) ? $_POST['operacao2'] : null;
$resultado = NULL;

/*
isset($_POST['operacao1']): Esta função verifica se a variável $_POST['operacao1'] está definida e não é nula.
 $_POST['operacao1'] será definida se o formulário foi enviado e 
 contém um campo com o atributo name="operacao1".

? $_POST['operacao1'] : null: Este é o operador ternário, que funciona como um atalho para um if básico. 
Se a condição antes do ponto de interrogação (isset($_POST['operacao1'])) for verdadeira, 
a expressão retorna o valor de $_POST['operacao1']. Se for falsa, a expressão retorna null.

Atribuição a $operacao1: O resultado da expressão ternária é atribuído à variável $operacao1.
*/

if(is_numeric($v1) && is_numeric($v2) && $operacao1 !== NULL){

switch($operacao1){

case '+':
$resultado = $v1 + $v2;
break;

case '-':
$resultado = $v1 - $v2;
break;

case '/':
$resultado = $v1 / $v2;
break;

case '*':
$resultado = $v1 * $v2;
break;

default:
 echo"Operação inválida!";
break;

}

}elseif(is_numeric($v3) && $operacao2 !== NULL){

switch($operacao2){

        case 'raizQuadrada':
        $resultado = sqrt($v3);
        break;
       
        case 'raizCubica':
        $resultado = pow($v3 , 1/3);
        break;
       
       default:
        echo"Operação inválida!";
       break;

    }
}
 

if ($resultado !== null) {
 echo "Resultado: " . number_format($resultado, 2, '.', ',');
 }

}


?>

</body>

</html>