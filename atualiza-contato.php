<?php 
    require_once('conexao.php');
    require_once('menu.php');

    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        header('Location: index.php');
    }elseif(isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['telefone']) && isset($_POST['email']) && isset($_POST['cpf']) && isset($_POST['data'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $data = str_replace("/","-",$_POST['data']);

        $query = mysqli_query($conexao,"update cadastro_cliente
        set nome_cliente = '$nome',  telefone = '$telefone', email='$email', cpf='$cpf', data_nascimento = '$data'
        where id_cliente = $id");

        echo "<p class='text-success text-center'>Cadastro efetuado com sucesso!</p>";
        echo "<p class='text-center'><a href='lista-contatos.php'>Voltar</a></p>";

    }else{
        header('Location: index.php');
    }

?>