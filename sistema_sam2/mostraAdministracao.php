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
    $pg_atual = "mostraAdministracao";
    include 'navbar.php';
    ?>
    <div class="container mt-5">
    <?php
include 'conexao.php';
// comando que será executado
$sql = "SELECT paciente,medicamento,enfermeiro,dose,data_adm,hora_adm,data_reg,hora_reg FROM administracao Order by paciente ASC";

// prepara para executar o comando
$comando = $conexao->prepare($sql);

// executa o comando
$resultado = $comando->execute();

if($resultado){
    ?>
    <h2>Receitas Administradas</h2>
    <table class="table table-hover table-bordered">
    <thead class="table-success">
        <tr>
        <th scope="col">Paciente</th>
        <th scope="col">Medicamento</th>
        <th scope="col">Enfermeiro</th>
        <th scope="col">Dose</th>
        <th scope="col">Data da Administração</th>
        <th scope="col">Hora da Administração</th>
        <th scope="col">Data do Registro</th>
        <th scope="col">Hora do Registro</th>
        </tr>
    </thead>
    <tbody>
    <?php
    while($linha = $comando->fetch()) {
        ?>
        <tr>
            <td><?php echo $linha['paciente'] ?></td>
            <td><?php echo $linha['medicamento'] ?></td>
            <td><?php echo $linha['enfermeiro'] ?></td>
            <td><?php echo $linha['dose'] ?></td>
            <td><?php echo $linha['data_adm'] ?></td>
            <td><?php echo $linha['hora_adm'] ?></td>
            <td><?php echo $linha['data_reg'] ?></td>
            <td><?php echo $linha['hora_reg'] ?></td>
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