<?php 
    require_once('conexao.php');
    require_once('menu.php');

    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        header('Location: index.php');
    }elseif(isset($_POST['nome']) && isset($_POST['telefone']) && isset($_POST['email']) && isset($_POST['cpf']) && isset($_POST['data'])){
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $data = str_replace("/","-",$_POST['data']);

        $query = mysqli_query($conexao,"insert into 
        cadastro_cliente(nome_cliente, telefone, email, cpf, data_nascimento) 
        values('$nome','$telefone','$email','$cpf','$data')");

        echo "<p class='text-success text-center'>Cadastro efetuado com sucesso!</p>";
        echo "<p class='text-center'><a href='cad-contato.php'>Voltar</a></p>";

    }else{
        header('Location: index.php');
    }

?>