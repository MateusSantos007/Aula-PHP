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
$comandoSQL = "SELECT `titulo`, `idioma` , `qtdpag`, `editora`,`datapublicacao`,`ISBN` FROM `livro` WHERE `id` = $id";

$comando = $conexao->prepare($comandoSQL);
$resultado = $comando->execute();

if($resultado) {
    if($linha = $comando->fetch()) {
?>
<form action="atualiza.php">
	<label for="nome">Titulo:</label>
<?php echo "<input type='text' name='titulo' value='{$linha['titulo']}'><br>"; ?>
	<label for="quantidade">Idioma:</label>
<?php echo "<input type='text' name='idioma' value='{$linha['idioma']}'><br>"; ?>
    <label for="descricao">Quantidade Pagina:</label>
<?php echo "<input type='text' name='qtdpag' value='{$linha['qtdpag']}'><br>"; ?>
    <label for="descricao">Editora:</label>
<?php echo "<input type='text' name='editora' value='{$linha['editora']}'><br>"; ?>
    <label for="descricao">Data Publicação:</label>
<?php echo "<input type='date' name='datapublicacao' value='{$linha['datapublicacao']}'><br>"; ?>
    <label for="preco">ISBN:</label>
<?php 
    echo "<input type='text' name='ISBN' value='{$linha['ISBN']}'><br>"; 
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