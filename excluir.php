<?php 
    require_once('conexao.php');
    require_once('menu.php');

    if($_SERVER['REQUEST_METHOD'] != 'GET'){
        header('Location: index.php');
    }elseif(isset($_GET['id'])){
        $id = $_GET['id'];        

        $query = mysqli_query($conexao,"delete from cadastro_cliente where id_cliente = $id");

        echo "<p class='text-success text-center'>Registro excluído com sucesso!</p>";
        echo "<p class='text-center'><a href='lista-contatos.php'>Voltar</a></p>";

    }

?>