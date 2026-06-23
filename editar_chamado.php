<?php
    $mostrarMenu = true;
    include 'templates/header.php';
?>

<?php include("conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM chamado WHERE id_chamado = $id";
$resultado = $conn->query($sql);

$chamado = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Chamado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container editar-chamado">

    <h2>Editar Chamado</h2>

    <form action="salvar_edicao.php" method="POST">

        <input
            type="hidden"
            name="id_chamado"
            value="<?= $chamado['id_chamado'] ?>">

        <label>Título</label>

        <input
            type="text"
            name="titulo"
            class="form-control"
            value="<?= $chamado['id_titulo'] ?>"
            required>

        <br>

        <label>Descrição</label>

        <textarea
            name="descricao"
            class="form-control"><?= $chamado['descricao'] ?></textarea>

        <br>

        <label>Status</label>

        <select
            name="status"
            class="form-control">

            <option value="aberto"
            <?= $chamado['status'] == 'aberto' ? 'selected' : '' ?>>
            Aberto
            </option>

            <option value="em andamento"
            <?= $chamado['status'] == 'em andamento' ? 'selected' : '' ?>>
            Em andamento
            </option>

            <option value="fechado"
            <?= $chamado['status'] == 'fechado' ? 'selected' : '' ?>>
            Fechado
            </option>

        </select>

        <br>

        <button class="btn btn-success">
            Salvar Alterações
        </button>

    </form>

</div>

</body>
</html>

<?php include __DIR__ . '/templates/footer.php'; ?>