<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1> Resultado do Processamento </h1>
    </header>

    <main>
        <?php

            $nome = $_GET["nome"] ?? "Sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "Deschonecido";
            echo " É um prazer te conhecer, <strong>$nome $sobrenome</strong> ! <br> Este é o meu site!";
            echo " <br> <strong>$nome</strong> se você quiser voltar só clicar aqui: ";


        ?>
        <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
    </main>
    
</body>
</html>