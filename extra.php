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
