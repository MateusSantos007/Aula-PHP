<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando dados</title>
</head>
<body>
    <?php
include 'conexao.php';

$id = $_GET['id'];
$comandoSQL = "SELECT `nome`, `pontos` FROM `times` WHERE `id` = $id";

$comando = $conexao->prepare($comandoSQL);
$resultado = $comando->execute();

if($resultado) {
    if($linha = $comando->fetch()) {
?>
<form action="atualiza.php">
	<label for="nome">Nome:</label>
<?php echo "<input type='text' name='nome' value='{$linha['nome']}'><br>"; ?>
	<label for="quantidade">Pontos:</label>
<?php 
    echo "<input type='text' name='pontos' value='{$linha['pontos']}'><br>"; 
    echo "<input type='hidden' name='id' value=$id>";
?>
	<input type="submit">
    </form>
<?php
    }
} else {
    echo "Erro no comando SQL";
}
    ?>    
</body>
</html> 