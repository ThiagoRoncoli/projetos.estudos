<!DOCTYPE html>
<html lang="p-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste do seu Produto</title>
</head>

<body>

    <form action= " <?= $_SERVER['PHP_SELF']?> " method="post">
    <strong><label for="preco">Preço  do Produto</label></strong>
    <input type="text" placeholder="Digite o valor..." name="preco" required><p>
    <strong><label for="porcentagem">Porcentagem do Reajuste</label></strong>
    <input type="text" placeholder="Digite a porcentagem..." name="porcentagem"required>
    <input type="submit" value="Calcular Reajuste">
    </form>

<main>

    <?php

    $preco = $_POST["preco"] ?? 0;
    $porcentagem = $_POST["porcentagem"] ?? 0;


    if($porcentagem > 0 && $preco > 0){

        $formula = ($preco * $porcentagem) / 100;

        $resultado = ($formula + $preco);

    $resultadoFormatado = number_format($resultado, 2, ',', '.');

    echo"Seu valor anterior era de: " . "<strong>$". $preco ."</strong><br>";

    echo"Agora seu valor atual será de: <strong>$$resultadoFormatado</strong><br>";

    echo"Você teve um aumento de: <strong>$$formula</strong>!";


    }else{
        echo"Informar Dados!";
    }

   

    

    ?>

</main>
    
</body>
</html>