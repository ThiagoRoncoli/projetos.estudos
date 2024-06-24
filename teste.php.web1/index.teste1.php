<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pós Cadastro</title>
    <link rel="stylesheet" href="style.teste1.css">

</head>
<body>
        <header>
            <h2>Seja bem vindo!</h2>
        </header>
    
<main>
<?php

$nome = $_REQUEST ["nome"];
$genero = $_REQUEST ["genero"];
$sobrenome = $_REQUEST ["sobrenome"];
$email = $_REQUEST ["email"];
$idade = $_REQUEST ["idade"];


echo"<br><h4 = ' color: white;'>Seja muito bem vindo <strong>$nome $sobrenome</strong>, este é meu site !</h4></br>";

echo"<br><h4 style = ' color: white;'>Você informou seu gênero como: <strong>$genero .</strong></h4></br>";

echo"<br><h4 style = ' color: white;'>Seu e-mail é: <strong>$email .</strong></h4></br>";


if($idade >= 18) {
    echo "<br><h4 style = ' color: white;'>Você tem <strong>$idade anos</strong>, logo você é maior de idade!</h4></br>";
}else{
    echo "<br><h4 style = ' color: white;'>Você tem <strong>$idade anos</strong>, logo você é menor de idade!</h4></br>";
}



?>
</main>



</body>
</html>