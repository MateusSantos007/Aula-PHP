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
$pg_atual = "mostraAluno";

include 'navbar.php';
?>
<div class="container mt-5">
<?php

include 'conexao.php';


$comandoSQL = 'SELECT alunos.id as id, alunos.nome as aluno, turmas.nome as turma FROM alunos INNER JOIN turmas ON (turmas.id = alunos.id_turma) ORDER BY alunos.nome,turmas.nome ASC';

$comando = $conexao->prepare($comandoSQL);

$resultado = $comando->execute();

if($resultado){
    $i = 1;
    ?>
    <table class="table table-secondary table-striped table-hover table-bordered">
    <thead class="table-light">
        <tr>
        <th scope="col">Nome</th>
        <th scope="col">Turma</th>
        </tr>
    </thead>
    <tbody>
    <?php
    while($linha = $comando->fetch()) {
        ?>
        <tr>
            <td><?php echo $linha['aluno'] ?></td>
            <td><?php echo $linha['turma'] ?></td>
            <td><?php echo '<a href="mostraAlunoNota.php?id='.$linha['id'].'" class="btn btn-success">Mostrar Nota</a>' ?></td>
        <?php
    }
    ?>
        </tbody>
    </table>
    <?php
}

?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>