<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "suporte_ti";

$conn = new mysqli($host, $usuario)





//usuarios.php: *//interface de cadastro, coleta os dados do usuário e 
// envia para o arquivo PHP que grava as infos no banco de dados.//*



salvar usuario:

$conn->query($sql);//o php envia o SQL para o MySQL, como: Banco de dados, execute esse INSERT

    header("Location: index.php");//redireciona o usuario para o formulário vazio
    exit;





    //ultimo:

    <?php
    $servername = "localhost 2";//ip v2//nos""colocar ip maquina virtual deixar aplicação na máquina real
    $username = "poly";
    $password = "123456";
    $dbname = "bancosuporte";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Falha na conexão: ". $conn->connect_error);
    }
    ?>





    //*
<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Chamados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Sistema de Chamados</h1>
        <hr>

        <a href="usuarios.php" class="btn btn-primary">
            Cadastrar Usuário
        </a>

        <a href="chamados.php" class="btn btn-success">
            Novo Chamado

        <a href="listar_chamados.php" class="btn btn-dark">
            Listar Chamados
        </a>
    </div>
</body>
</html>

//A página chamados.php consulta todos os usuários cadastrados no 
// banco de dados utilizando o comando SELECT * FROM usuarios. Esses usuários 
//são exibidos dinamicamente em uma lista suspensa através de um laço while. 
//O formulário coleta título, descrição e usuário responsável pelo chamado e 
//envia essas informações para o arquivo salvar_chamado.php, que realiza a 
//gravação no banco de dados.