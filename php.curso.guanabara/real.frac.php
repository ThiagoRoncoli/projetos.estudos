<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu número analaisado</title>
</head>
<body>

<h2>Seu número analisado teve seguintes resultados: </h2>

<main>
<?php

$num = $_GET["n"] ?? 0;


echo"Analisando o seu número: " . number_format( $num , 3 , ",",".") . " Informado
pelo usuário! <br>";


$int = (int) $num;
$fra = $num - $int;

echo "<br>A parte inteira do número é <strong>" . number_format( $num , 3 ,",",".") .".</strong></br>";

echo "<p>A parte fracionário do número é <strong>" . number_format( $fra , 3 ,",",".") .".</strong></p>";




?>

</main>
    
</body>
</html>