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

include 'conexao.php';
// comando que será executado
$comandoSQL = 'SELECT `id`,`nome`, `pontos` FROM `times` Order by `pontos` DESC';

// prepara para executar o comando
$comando = $conexao->prepare($comandoSQL);

// executa o comando
$resultado = $comando->execute();

if($resultado){
    $i = 1;
    ?>
    <table class="table table-secondary table-striped table-hover table-bordered">
    <thead class="table-light">
        <tr>
        <th scope="col">Position</th>
        <th scope="col">Club</th>
        <th scope="col">Points</th>
        <th scope="col">Delete</th>
        <th scope="col">update</th>
        </tr>
    </thead>
    <tbody>
    <?php
    while($linha = $comando->fetch()) {
        ?>
        <tr>
            <th scope="row"><?php echo $i ?></th>
            <td><?php echo $linha['nome'] ?></td>
            <td><?php echo $linha['pontos'] ?></td>
            <td><?php echo '<a href="apaga.php?id='.$linha['id'].'" class="btn btn-danger">Apagar</a>' ?></td>
            <td><?php echo '<a href="recebeid.php?id='.$linha['id'].'" class="btn btn-success">Atualizar</a>' ?></td>
        <?php
        $i++;
    }
    ?>
        </tbody>
    </table>
    <?php
}

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>