<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php 
        $pg_atual = "cadastroTurma";
        include 'navbar.php';
    ?>
    <div class="container mt-5">
        <h2>Cadastrar Turma</h2>
        <form action="salvarTurma.php">
            <div class="form-floating mb-3">
                <input type="text" name="nome" id="nome" placeholder="nome" class="form-control" required>
                <label for="nome">Nome</label>
            </div>
            <input type="submit" value="Cadastrar" class="btn btn-success">
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>
</html>