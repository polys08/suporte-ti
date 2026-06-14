<?php

include("conexao.php");
include("funcao.php");

    $id = $_POST['id_chamado'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    if(!statusValido($status)){
    die("Status inválido.");
}

    $sql = "
    UPDATE chamado
    SET
        id_titulo = '$titulo',
        descricao = '$descricao',
        status = '$status'
    WHERE id_chamado = $id
    ";

    if($conn->query($sql)){
        header("Location: listar_chamados.php");
        exit;
    }else{
        echo "Erro: " . $conn->error;
    }
?>