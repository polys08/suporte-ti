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