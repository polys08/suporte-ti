<?php
    include("conexao.php");//copia conteúdo $conn

    $id_usuarios = $conn->query(
        "SELECT * FROM usuarios"//buscar usuario, todos do banco
    );

    $categorias = $conn->query(
        "SELECT * FROM categoria"
    );
?>

<!DOCTYPE html>
<html>
<head>
    <title>Abrir Chamados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">    
</head>
<body>
    <div class="container mt-4">
        <h2>Abrir Chamado</h2>
        <form action="salvar_chamado.php" method="POST">
            <label>Título</label>

            <input type="text"
            name="titulo"
            class="form-control"
            required>
<br>
            <label>Descrição</label>

            <textarea
            name="descricao"
            class="form-control">
            </textarea>
<br>
            <label>Usuário</label>

            <select
            name="usuario_id"
            class="form-control">

            <?php
            while($u = $id_usuarios->fetch_assoc()){//Essa linha percorre todos os usuários retornados pelo banco, forma tipo uma lista
            ?>
                <option value="<?= $u['id_usuarios'] ?>">
                <?= $u['id_nome'] ?>
                </option>
            <?php
            }
            ?>

            </select>
<br>
            <label>Categoria</label>

            <select
            name="categoria_id"
            class="form-control">

            <?php
            while($c = $categorias->fetch_assoc()){
            ?>
                <option value="<?= $c['id_categoria'] ?>">
                <?= $c['nome_categoria'] ?>
                </option>
            <?php
            }
            ?>

            </select>
<br>

            <button class="btn btn-success">
            Salvar
            </button>

</form>
</div>
</body>
</html>

//A página chamados.php consulta todos os usuários cadastrados no 
banco de dados utilizando o comando SELECT * FROM usuarios. Esses usuários 
são exibidos dinamicamente em uma lista suspensa através de um laço while. 
O formulário coleta título, descrição e usuário responsável pelo chamado e 
envia essas informações para o arquivo salvar_chamado.php, que realiza a 
gravação no banco de dados.