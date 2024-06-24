<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
</head>

<body>
    <main>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="v1"><h2>Informe o Valor</h2></label>
        <input type="text" name="v1" id="idv1" required><br>
        <br><input type="submit" value="Calcular"></br>

        </form>
    </main>


<?php

$v1 = $_POST["v1"];


$raizQuadrada = sqrt($v1);
echo"<br>O resultado da Raiz Quadrado do número <strong>$v1</strong> é: " . "<strong>". $raizQuadrada . "</strong>";


$raizCubica = pow($v1 , 1/3);
echo"<p>O resultado da Raiz Cúbica do número <strong>$v1</strong> é: " . "<strong>" . $raizCubica . "</strong>";


?>
    
</body>
</html>