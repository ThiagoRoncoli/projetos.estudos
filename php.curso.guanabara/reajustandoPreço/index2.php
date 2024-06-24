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
    <input type="text" placeholder="Digite o valor..." name="preco" id="preco" required><p>
    <strong><label for="reaj">Porcentagem do Reajuste (<strong> <span id="p"> ? </span>%</strong>) </label></strong>
    <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" required>

    <input type="submit" value="Reajuste">
    </form>

<main>

<section>



<script>

    mudaValor()

function mudaValor(){
    p.innerText = reaj.value;
 }

</script>

<?php
$preco = $_POST["preco"] ?? 0;
$reaj = $_POST["reaj"] ?? 0;


    if($reaj > 0 && $preco > 0){

        $formula = ($preco * $reaj) / 100;

        $resultado = ($formula + $preco);

    $resultadoFormatado = number_format($resultado, 2, ',', '.');

    echo"Seu valor anterior era de: " . "<strong>$". $preco . " reais</strong> <br>";

    echo"Agora seu valor atual será de: <strong>$$resultadoFormatado reais</strong> <br>";
 
    echo"Você teve um aumento de: <strong>$$formula reais</strong> !";


    }

?>

</section>
    

</main>


    
</body>
</html>