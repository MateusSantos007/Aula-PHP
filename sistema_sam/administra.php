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
        include 'conexao.php';
        $pg_atual = "mostrarReceita";
        include 'navbar.php';

        $sql = "SELECT nome FROM pacientes";
        $comando = $conexao->prepare($sql);
        $resultado = $comando->execute();
    ?>
    <div class="container mt-5">
        <h2>Administrar Receita</h2>
        <form action="administraReceita.php" method="post">
            <div class="form-floating mb-3">
                <input type="date" name="data_adm" id="data_adm" placeholder="data_adm" class="form-control" required>
                <label for="leito">Data de Administração</label>
            </div>
            <div class="form-floating mb-3">
                <input type="time" name="hora_adm" id="hora_adm" placeholder="hora_adm" class="form-control" required>
                <label for="leito">Hora de Administração</label>
                <input type="text" value="<?php echo $_GET['id'] ?>" name="id" hidden>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" value="Administrar" class="btn btn-lg btn-success">
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>