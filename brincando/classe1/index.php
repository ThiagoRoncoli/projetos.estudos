<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>

<?php

        include_once("cls.pessoa.php");
        include_once("cls.funcionario.php");

        $salario = 2000;
        $hrsTrab = 6;
        $cargo = "Atendente.";

        $funcionario = new funcionario($salario, $hrsTrab, $cargo);

        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id = $_POST['id'] ?? '';
        $nome = $_POST['nome'] ?? '';
        $data_nasci = $_POST['data_nasci'] ?? '';
        $genero = $_POST['genero'] ?? '';
        $gmail = $_POST['gmail'] ?? '';

        $numero_aleatorio = random_int(1,1000);

        echo "<h2>Confirmação de Cadastro</h2>";


        echo"<p>Olá <strong>$nome</strong>!<p>";

        echo"<p>Os seus dados fornecidos foram:</p>";

        echo"<ul>";


        echo"<li>CPF cadastrado foi: <strong>$id</strong></li><br>";
        echo"<li>Data de Nascimento informada: <strong>$data_nasci</strong></li><br>";
        echo"<li>Gênero informado é: <strong>$genero</strong></li><br>";
        echo"<li>Gmail de trabalho cadastrado foi: <strong>$gmail</strong></li><br>";

        echo"<hr></hr>";

        echo"<p><li>Seja muito bem vindo <strong>$nome</strong>!</li><br>";

        echo"<li>Seu número de cadastro para trabalhar foi <strong>$numero_aleatorio</strong>.</li></br>";

        echo"<li>Você vai receber <strong>$salario</strong> reais.</li><br>";

        echo"<li>Irá trabalhar de segunda a sexta, <strong>$hrsTrab</strong> horas por dia.</li><br>";

        echo"<li>E exercerá o cargo de <strong>$cargo</strong></li>.";

        echo"</ul>";
    
        }else{


?>

    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">

    <label for="id">Identidade (CPF)</label>
    <input type="text" name="id" placeholder="Digite seu CPF..."><br>

    <label for="nome">Nome</label>
    <input type="text" name="nome"placeholder="Escreva seu nome..."><br>

    <label for="data_nasci">Data de Nascimento</label>
    <input type="date" name="data_nasci" required><br>

    <label>Genêro</label>
    <input type="radio" name="genero" value="Masculino" required>Masculino
    <input type="radio" name="genero" value="Feminino" required>Feminino<br>

    <label for="gmail">Gmail</label>
    <input type="gmail" name="gmail"placeholder="Informe seu Gmail..."><br>

    <input type="submit" value="Cadastrar">

    <?php } ?>

    </form>
    
</body>

</html>