<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe seu Salário</title>
    <link rel="stylesheet" href="style.calculo.css">
    
</head>

<body>


<main>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label for="salario">Digite seu salário</label>
    <input type="text" name="salario" id="idsalario" required>
    <input type="submit" value="calcular">
    </form>

</main>


<?php

$salario = $_POST ["salario"] ?? 0;

$salarioMin = 1.412;

$resultado = ($salario / $salarioMin);

// Formatando o quociente com duas casas decimais
$resultadoFormatado = number_format($resultado, 0);

echo"<br>Seu salário de <strong>$$salario</strong> equivale a $resultadoFormatado x $$salarioMin";


?>
 
</body>
</html>