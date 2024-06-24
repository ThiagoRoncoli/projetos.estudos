<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aletoriedade</title>
</head>

<body>

    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    
<main>

<?php

$numero_aleatorio = random_int(1, 100);

echo "Vou gerar um número aletório entre 1 a 100!<br>" ;

echo "Seu número aleatório é: <strong>$numero_aleatorio</strong>";



?>


</main>

    <form action="aleatorio_nmr.php" method="get">
        <input type="submit" value="Gerar número">
    </form>


</body>
</html>