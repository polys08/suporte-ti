<?php
$statusFiltro = $_GET['status'] ?? '';

$chamadosFiltrados = array_filter($chamados, function ($chamado) use ($statusFiltro) {

    if ($statusFiltro === '') {
        return true;
    }

    return $chamado['status'] === $statusFiltro;
});
?>