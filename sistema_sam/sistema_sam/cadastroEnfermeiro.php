<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php 
        $pg_atual = "";
        include 'navbar.php';
        //session_start();
    ?> 
    <div class="container mt-5">
        <h2>Cadastro Enfermeiro</h2>
        <form action="salvaEnfermeiro.php" method="post">
            <div class="form-floating mb-3">
                <input type="text" name="nome" id="nome" placeholder="nome" class="form-control" required>
                <label for="nome">Nome</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="COREN" id="COREN" placeholder="COREN" class="form-control" required>
                <label for="COREN">COREN</label>
            </div>
            <div class="row mb-3">
                <div class="form-floating col">
                    <input type="text" name="usuario" id="usuario" placeholder="usuario" class="form-control" required>
                    <label for="usuario">Usuario</label>
                </div>
                <div class="form-floating col">
                    <input type="password" name="senha" id="senha" placeholder="senha" class="form-control" required>
                    <label for="senha">Senha</label>
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" value="Cadastrar" class="btn btn-lg btn-success">
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>