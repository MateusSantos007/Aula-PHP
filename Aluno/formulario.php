<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Simples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
$pg_atual = 'cadastrar';

include 'menu.php';
?>
    <div class='container-fluid'>
        <h1>Cadastrar</h1>
        <form action="recebe.php">
            <div class="row m-3">
                <div class="col 3">
                    <label for="nome" class="form-label">Nome:</label>
                </div>
                <div class="col">
                    <input type="text" id="nome" name="nome" class="form-control"><br>
                </div>
            </div>
            <div class="row m-3">
                <div class="col 2">
                    <label for="nascimento" class="form-label">Data Nascimento</label>
                </div>
                <div class="col">
                    <input type="date" id="nascimento" name="nascimento" class="form-control"><br>
                </div>
            </div>
            <div class="row m-3">
                <div class="col 2">
                    <label for="peso" class="form-label">Peso:</label>
                </div>
                <div class="col">
                    <input type="text" id="peso" name="peso" class="form-control"><br>
                </div>
            </div>
            <div class="row m-3">
                <div class="col 2">
                    <label for="altura" class="form-label">Altura:</label>
                </div>
                <div class="col">
                    <input type="text" id="altura" name="altura" class="form-control"><br>
                </div>
            </div>
            <div class="row m-3">
                <div class="col 2">
                    <input type="submit" value="Salvar" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>