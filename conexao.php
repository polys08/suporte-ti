<?php
    $servername = "";//ip v2//nos""colocar ip maquina virtual deixar aplicação na máquina real
    $username = "root";
    $password = "";
    $dbname = "bancosuporte";

    $conn = new mysqli ($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Falha na conexão: ". $conn->connect_error);
    }
    ?>
