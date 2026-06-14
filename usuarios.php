<!DOCTYPE html>
<html>
<head>
    <title>Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-4">
    <h2>Cadastrar Usuário</h2>
    <form action="salvar_usuario.php" method="POST">
        <label>Nome</label>
            <input type="text"
            name="nome"
            class="form-control"
            required>
            
    <br>
        <label>Email</label>
            <input type="email"
            name="email"
            class="form-control"
            required>
    <br>

        <button class="btn btn-primary">
           Salvar
        </button>
    </form> 
</div>
</body>
</html>

