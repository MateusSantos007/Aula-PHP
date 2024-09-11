<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Simples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
$pg_atual = 'mostra';

include 'menu.php';
include 'aluno.php';

    session_start(); 

    $aluno = unserialize($_SESSION['aluno']);

    //header('location: mostra_idade.php');
?>
    <div class='container-fluid'>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Aluno: <?php echo $aluno->nome?></h5>
                <ul class="list-group card-text">
                    <li class="list-group-item">Data Nascimento: <?php echo $aluno->nascimento?></li>
                    <li class="list-group-item">Peso: <?php echo $aluno->peso?></li>
                    <li class="list-group-item">Altura: <?php echo $aluno->altura?></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>