<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesquisa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  
  <?php
    //trim = Remove espaços em branco no início e no final da string de pesquisa.
    /*strolower = Converte todos os caracteres da string para minúsculas, 
    tornando a pesquisa insensitive à maiúsculas e minúsculas.*/
    
    $pesquisa = trim(strtolower($_POST['busca'] ?? ''));
    
    include "conexao.php";

    /*LOWER = na consulta SQL garante que a comparação seja feita entre strings minúsculas, 
    independentemente da capitalização do nome digitado pelo usuário. Isso significa que, 
    mesmo que o usuário digite o nome com algumas letras maiúsculas, a pesquisa ainda encontrará 
    o registro correto. */

    $sql = "SELECT * FROM pessoas WHERE LOWER(nome) LIKE '%" . strtolower($pesquisa) . "%'";

    $dados = mysqli_query($conn, $sql);

    // A funçao data de nascimento não está retornando no formato brasileiro.

    ?>

  <body>
  

    <div class="container">
        <div class="row">
            <div class="col">

        <h1>Pesuisar</h1>

        <nav class="navbar navbar-light bg-lighht">
            <form class="form-inline" action="pesquisa.php" method="POST" role="search">
                <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
                <button class="btn btn-outline-success my-2 my-sm 0" type="submit">Pesquisar</button>
            </form>
        </nav>

        <table class="table table-hover">
        <thead>
            <tr>

            <th scope"col">Nome</th>
            <th scope"col">Endereço</th>
            <th scope"col">Telefone</th>
            <th scope"col">Email</th>
            <th scope"col">Data de Nascimento</th>
            <th scope"col">Funções</th>


            </tr>
        </thead>
        <tbody>

            <?php
        while ($linha = mysqli_fetch_assoc($dados)) {
            $cod_pessoa = $linha['cod_pessoa'];
            $nome = $linha['nome'];
            $endereco = $linha['endereco'];
            $telefone = $linha['telefone'];
            $email = $linha['email'];
            $data_nascimento  = $linha['data_nascimento'];
            $data_nascmiento = mostra_data($data_nascimento);

            echo"<tr>
                    <th scope='row'>$nome</th>
                        <td>$endereco</td>
                        <td>$telefone</td>
                        <td>$email</td>
                        <td>$data_nascimento</td>
                        <td width=150px>
                            <a href='#' class= 'btn btn-success btn-sm'>Editar</a>
                            <a href='#' class= 'btn btn-danger btn-sm'>Excluir</a>
                        </td>

                </tr>";
        }
?>
           
        </tbody>
</table>

<a href="index.php" class="btn bnt-info">Voltar para o início</a>
        </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>