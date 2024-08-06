<?php 
    require_once('conexao.php');

    if($_SERVER['REQUEST_METHOD'] != 'GET'){
        header('Location: index.php');
    }else{
        $id = $_GET['id'];

        $query = mysqli_query($conexao, 
        "select id_cliente, nome_cliente, telefone, email, cpf, data_nascimento 
        from cadastro_cliente
        where id_cliente = $id");

        $dados = mysqli_fetch_array($query);

        $nome = $dados[1];
        $telefone = $dados[2];
        $email = $dados[3];
        $cpf = $dados[4];
        $data = $dados[5];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
</head>
<body>
    <?php 
        require('menu.php');
    ?>
    
    <div class="container ">
        <div class="row justify-content-center ">
            <div class="col-md-6 col-9 card p-2 border-dark border-2">
                <h2 class="text-center card-header border-dark border-2 mt-2">EDITAR CONTATO</h2>

                <form action="atualiza-contato.php" method="post" class="p-2">
                    <input type="hidden" class="form-control mb-2 border-2" name="id" id="id" value="<?= $id ?>">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control mb-2 border-2" name="nome" id="nome" value="<?= $nome ?>">

                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control mb-2 border-2" name="telefone" id="telefone" maxlength="12" value="<?= $telefone ?>">

                    <label for="email" class="form-label">Email</label>
                    <input type="mail" class="form-control mb-2 border-2" name="email" id="email" value="<?= $email ?>">

                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control mb-2 border-2" name="cpf" id="cpf" maxlength="11" value="<?= $cpf ?>">

                    <label for="data" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control mb-2 border-2" name="data" id="data" value="<?= $data ?>">
                    
                    
                    <button type="submit" class="col-12 btn btn-primary btn-lg mt-2">Atualizar</button>
                        

                    
                </form>

            </div>
        </div>
    </div>
</body>
</html>