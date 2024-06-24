<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troca ou Não</title>
</head>

<body>



 <form action="<?= $_SERVER['PHP_SELF']?>"method="post">
<label for="valor1">Valor 1</label>
<input type="text" placeholder="Digite aqui o valor..." name="valor1" required><br>
<label for="valor2">Valor 2</label>
<input type="text" placeholder="Digite o segundo valor..." name="valor2" required><br>
<input type="submit" value="Calcular">
 </form>
    
</body>

<main>
    <?php

    $valor1 = $_POST["valor1"] ?? 0;
    $valor2 = $_POST["valor2"] ?? 0;

    if($valor1 > $valor2){


        echo"<strong>$valor1</strong> é maior que <strong>$valor2</strong><br>";
    }else{
        echo"<strong>$valor1</strong> é menor que <strong>$valor2</strong><br>";
    }
    
    $diferenca = ($valor1 - $valor2);


    $diferenca = abs($diferenca);
    echo"A diferença do valor entre eles é:<strong>$diferenca</strong>";
    

    ?>
</main>


</html>