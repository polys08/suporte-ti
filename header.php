<?php

if (!isset($mostrarMenu)) {
    $mostrarMenu = false;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TechOffice</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="conteudo">
<nav class="navbar navbar-dark navbar-custom fixed-top">

    <div class="container flex-column">

        <!-- Nome da empresa -->
        <a class="navbar-brand fw-bold" href="index.php">
            TechOffice
        </a>

        <?php if ($mostrarMenu): ?>

        <!-- Abas -->
        <ul class="navbar-nav flex-row mt-2">

            <li class="nav-item mx-3">
                <a class="nav-link" href="usuarios.php">
                    Cadastrar Usuário
                </a>
            </li>


            <li class="nav-item mx-3">
                <a class="nav-link" href="chamados.php">
                    Abrir Chamado
                </a>
            </li>


            <li class="nav-item mx-3">
                <a class="nav-link" href="listar_chamados.php">
                    Consultar Chamados
                </a>
            </li>

        </ul>

        <?php endif; ?>
    </div>
</nav>
</div>
<div class="espaco-header"></div>