<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomrulário</title>
</head>

<body>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nome = $_POST['nome'] ?? ''; 
$dataNascimento = $_POST['dataNascimento'] ?? '';
$email = $_POST['email'] ?? '';
$genero = $_POST['genero'] ?? '';



echo"<ul>";

echo"Bem vindo <strong>$nome</strong>.<br>";

echo"Seu G-mail cadastrado foi: <strong>$email</strong>.<br>";

echo"Sua Data de Nascimento é: <strong>$dataNascimento</strong>.";

echo"<br>Você é do gênero: <strong>$genero</strong>.";

}else{

?>

    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">

<label for="nome"><strong>Nome Completo</strong></label>
<input type="text" placeholder="Digite seu nome completo..." name="nome" required><br>

<label for="idade"><strong>Data de Nascimento</strong></label>
<input type="date" name="dataNascimento"><br>

<label for="email"><strong>G-mail</strong></label>
<input type="email" name="email" placeholder="Digite seu e-mail"><br>

<label for="genero"><strong>Seu gênero</strong></label>
<input type="radio" name="genero" value="Masculino">Masculino
<input type="radio" name="genero" value="Feminino">Feminino<br>


<br><input type="submit" value="Cadastrar">

<?php } ?>

</form>

</body>


</html>