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
    $pg_atual = "mostraPaciente";
    include 'navbar.php';
    ?>
    <div class="container mt-5">
    <?php
include 'conexao.php';
// comando que será executado
$sql = "SELECT nome,leito FROM pacientes ORDER BY nome ASC";

// prepara para executar o comando
$comando = $conexao->prepare($sql);

// executa o comando
$resultado = $comando->execute();

if($resultado){
    $i = 1;
    ?>
    <h2>Receitas</h2>
    <table class="table table-hover table-bordered">
    <thead class="table-success">
        <tr>
        <th scope="col">Nome</th>
        <th scope="col">Leito</th>
        </tr>
    </thead>
    <tbody>
    <?php
    while($linha = $comando->fetch()) {
        ?>
        <tr>
            <td><?php echo $linha['nome'] ?></td>
            <td><?php echo $linha['leito'] ?></td>
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