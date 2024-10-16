<?php

include 'conexao.php';

$codigoSQL = "UPDATE `times` SET `nome` = :nm, `pontos` = :ptd WHERE `times`.`id` = :id";

try {
    $comando = $conexao->prepare($codigoSQL);

    $resultado = $comando->execute(array('nm' => $_GET['nome'], 'ptd' => $_GET['pontos'], 'id' => $_GET['id']));

    if($resultado) {
	header('location:mostra.php');
    } else {
	echo "Erro ao executar o comando!";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;

?> 