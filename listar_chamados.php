<?php
    include("conexao.php");

    $busca = "";
    $statusFiltro = "";

    if(isset($_GET['busca'])){
    $busca = $_GET['busca'];
}

    if(isset($_GET['status'])){
    $statusFiltro = $_GET['status'];
}

$sql = "
    SELECT
    c.id_chamado,
    c.id_titulo,
    c.descricao,
    c.status,
    u.id_nome,
    cat.nome_categoria

    FROM chamado c

    INNER JOIN usuarios u
    ON c.usuario_id = u.id_usuarios

    INNER JOIN categoria cat
    ON c.categoria_id = cat.id_categoria

    WHERE c.id_titulo LIKE '%$busca%'
";

    $resultado = $conn->query($sql);

    $chamados = [];

    while($linha = $resultado->fetch_assoc()){
    $chamados[] = $linha;
}
    if($statusFiltro != ''){
        $chamados = array_filter($chamados, function($chamado) use ($statusFiltro){
            return strtolower($chamado['status']) === strtolower($statusFiltro);

    });
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Chamados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-4">
    <h2>Chamados</h2>

    <form method="GET">

        <input
        type="text"
        name="busca"
        placeholder="Pesquisar chamado"
        class="form-control">
<br>

        <select name="status" class="form-control">
            <option value="">Todos os status</option>
            <option value="aberto">Aberto</option>
            <option value="em andamento">Em andamento</option>
            <option value="fechado">Fechado</option>
        </select>

        <button class="btn btn-primary">
            Pesquisar
        </button>
    </form>
<br>

        <table class="table table-bordered">

            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Usuário</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>

            <?php foreach($chamados as $linha){ ?>

            <tr>
                <td><?= $linha['id_chamado'] ?></td>

                <td><?= $linha['id_titulo'] ?></td>

                <td>
                    <span class="desc-preview">
                        <?= mb_strimwidth($linha['descricao'], 0, 40, "...") ?>
                    </span>

                    <input type="checkbox" id="toggle<?= $linha['id_chamado'] ?>" class="toggle-desc">

                    <label for="toggle<?= $linha['id_chamado'] ?>" class="ver-mais">
                        ...
                    </label>

                    <div class="desc-completa">
                        <?= $linha['descricao'] ?>
                    </div>
                </td>

                <td><?= $linha['status'] ?></td>

                <td><?= $linha['id_nome'] ?></td>

                <td><?= $linha['nome_categoria'] ?></td>

                <td>
                    <a href="editar_chamado.php?id=<?= $linha['id_chamado'] ?>"
                        class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <a href="excluir_chamado.php?id=<?= $linha['id_chamado'] ?>"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Deseja realmente excluir este chamado?')">
                        Excluir
                    </a>
                </td>
            </tr>

            <?php
            }
            ?>

        </table>
    </div>
</body>
</html>