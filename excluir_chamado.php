<?php
    include("conexao.php");

        $id = $_GET['id'];

        $sql = "DELETE FROM chamado
                WHERE id_chamado = $id";

        if($conn->query($sql)){
            header("Location: listar_chamados.php");
            exit;
        }else{
            echo "Erro: " . $conn->error;
        }
?>