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
        //session_start();
        //echo $_SESSION['nome'];
        $pg_atual = "paciente";
        include 'navbar.php';
    ?>
    <div class="container mt-5">
        <h2>Realizar Login</h2>
        <form action="validarLogin.php" method="post">
            <div class="form-floating mb-3">
                <select name="tipo_login" id="tipo_login" class="form-select">
                    <option value="medico">Médico</option>
                    <option value="enfermeiro">Enfermeiro</option>
                </select>
                <label for="tipo_login">Selecione o Tipo do Usuario</label>
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
                <input type="submit" value="Logar" class="btn btn-lg btn-success">
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>