<?php

include("conexao.php");
include("funcao.php");

    $titulo = limparTexto($_POST['titulo']);
    $descricao = limparTexto($_POST['descricao']);

    $usuario_id = $_POST['usuario_id'];
    $categoria_id = $_POST['categoria_id'];

    if(!validarTitulo($titulo)){
    die("O título deve ter pelo menos 3 caracteres.");
}

    if(empty($usuario_id) || empty($categoria_id)){
    die("Selecione um usuário e uma categoria.");
}

    $sql = "INSERT INTO chamado(
        id_titulo,
        descricao,
        usuario_id,
        categoria_id
    )

    VALUES(
        '$titulo',
        '$descricao',
        '$usuario_id',
        '$categoria_id'
    )";

    if($conn->query($sql)){
        header("Location: listar_chamados.php");
        exit;
    }else{
        echo "Erro: " . $conn->error;
    }

?>