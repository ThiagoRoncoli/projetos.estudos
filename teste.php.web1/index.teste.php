<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.teste.css">

</head>


<body>

<header>

    <h1> Resultado do processamento</h1>

</header>

<main>

    <?php
    
    $nome = $_GET["nome"] ?? "sem nome";
    $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
    $email = $_GET["email"] ?? "qual seu e-mail?";
    $idade = $_GET["idade"] ?? "Ops esqueceu a sua idade!";


    date_default_timezone_set("America/Sao_Paulo");
    $horário = date("H:i:s");

    echo "É um prazer te encontrar aqui <strong>$nome $sobrenome</strong> !";
    echo "<br>Você entrou no meu site exatamente no horário: <strong>$horário</strong> de São Paulo!";
    echo "<br>E seu E-mail é: <strong>$email</strong> </br>";
    echo "E a sua idade é: <strong>$idade anos</strong>";

    if($idade >= 18){
        echo "<br>Você tem $idade anos, logo você é maior de idade.";
    }else if ($idade < 18){
        echo "<br>Você  tem  $idade anos logo, você é menor de idade.";
    }


    ?>

</main>



</body>
</html>