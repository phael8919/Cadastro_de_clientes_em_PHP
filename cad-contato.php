<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        .borda{
            border: 5px solid black;
        }
    </style>
</head>
<body>
    <?php 
        require('menu.php');
    ?>
    
    <div class="container ">
        <div class="row justify-content-center ">
            <div class="col-md-6 col-9 card p-2 border-dark border-2">
                <h2 class="text-center card-header border-dark border-2 mt-2">CADASTRAR CLIENTE</h2>

                <form action="registra-contato.php" method="post" class="p-2">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control mb-2 border-2" name="nome" id="nome">

                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control mb-2 border-2" name="telefone" id="telefone" maxlength="12">

                    <label for="email" class="form-label">Email</label>
                    <input type="mail" class="form-control mb-2 border-2" name="email" id="email">

                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control mb-2 border-2" name="cpf" id="cpf" maxlength="11">

                    <label for="data" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control mb-2 border-2" name="data" id="data">
                    
                    <div class="d-grid gap-2 d-md-flex pe-2 py-2">
                        <button type="submit" class="col-md-6 col-12 btn btn-primary btn-lg"> Enviar</button>
                        <button type="reset" class="col-md-6 col-12 btn btn-warning btn-lg ">Limpar</button>
                    </div>
                    
                </form>

            </div>
        </div>
    </div>

</body>
</html>