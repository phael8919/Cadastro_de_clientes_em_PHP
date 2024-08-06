<?php 
    require_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <style>
        table{ overflow-x: auto;}
    </style>
</head>
<body>
    <?php 
        require_once('menu.php');    
    ?>
    <div class="container">
        <div class="row d-flex justify-content-center overflow-auto">
            <div class="col-md-9 col-10">
                <h2 class="text-center mt-2 mb-3">CONSULTAR CLIENTES</h2>
                
                <form action="lista-contatos.php" method="post" class="row d-flex justify-content-center mb-3">
                    <div class="col-md-8 col-7">
                        <input type="text" class="form-control border-2" placeholder="Digite aqui o nome do cliente" name="pesquisa">
                    </div>
                    <div class="col-md-2 col-4">
                        <button type="submit" class="btn btn-primary px-5 ">PESQUISAR</button>
                    </div>
                </form>
                
                <table class="table  table-striped table-hover border border-1" >
                    <?php 
                        $mensagem = '';
                        if(isset($_POST['pesquisa'])){
                            $pesquisa = $_POST['pesquisa'];
                            if($pesquisa == ''){
                                $mensagem = 'Digite o nome do cliente!';
                                echo "<p class='text-danger text-center'>$mensagem</p>";
                            }else{
                                echo "<tr>
                                    <th>ID</th> <th>Nome</th> <th>Telefone</th> <th>Email</th> <th>CPF</th> 
                                    <th>Data de Nascimento</th> <th>Editar</th> <th>Excluir</th>
                                </tr>";

                                $query = mysqli_query($conexao,"select * from cadastro_cliente where nome_cliente like '%$pesquisa%'");
                                $num_linhas = mysqli_num_rows($query);

                                for($i=0;$i<$num_linhas;$i++){
                                    $dados = mysqli_fetch_array($query);

                                    $id = $dados[0];
                                    $nome = $dados[1];
                                    $telefone = $dados[2];
                                    $email = $dados[3];
                                    $cpf = $dados[4];
                                    $nascimento = date('d/m/Y',strtotime(str_replace("-","/",$dados[5])));

                                    echo "<tr>
                                        <td>$id</td><td>$nome</td> <td>$telefone</td> <td>$email</td>
                                        <td>$cpf</td> <td>$nascimento</td>
                                        <td><a href='editar.php?id=$id' class='text-success'>Editar</a></td>
                                        <td><a href='excluir.php?id=$id' class='text-danger'>Excluir</a></td>
                                    </tr>";
                                }
                            }
                        }
                    ?>
                </table>
                
                
                
            </div>
        </div>
    </div>
</body>
</html>