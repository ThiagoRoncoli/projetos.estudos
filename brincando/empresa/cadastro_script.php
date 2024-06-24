<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  

    <div class="container">
        <div class="row">

        <?php

            include ("conexao.php");

            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $data_nascimento = $_POST['data_nascimento'];

            $sql = "INSERT INTO `pessoas`( `nome`, `endereco`, `telefone`, `email`, `data_nascimento`) 
            VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento')";


            if(mysqli_query($conn, $sql)){
                mensagem("$nome cadastrado com sucesso !" , 'sucess');
            }else{
                mensagem("$nome não cadastrado com sucesso !" , 'danger');
            }

        ?>
        <a href="index.php" class="btn btn-primary">Voltar</a>

        </div>
        </div>
    </div>

</body>
</html>
