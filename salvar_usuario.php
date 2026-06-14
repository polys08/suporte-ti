<?php
    include("conexao.php");//////copia o conteúdo de conexao.php para cá, no caso a $conn, criando a conexao

    $nome = $_POST['nome'];/////aqui a mesma coisa ele passa a ter acesso ao usuarios.php
    $email = $_POST['email'];////ambos são variaveis

    $sql = "INSERT INTO usuarios(
    id_nome, 
    id_email
    )
    VALUES(
    '$nome',
    '$email'
    )";///inserir um registro na tabela usuários, nas colunas nome e email//values cria o valor no id

    if($conn->query($sql)){
    header("Location: index.php");
    exit;
    }else{
    echo "Erro: " . $conn->error;
    }

?>