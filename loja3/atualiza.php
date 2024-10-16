<?php

include 'conexao.php';

$codigoSQL = "UPDATE `produto` SET `nome` = :nm,`foto` = :ft, `descricao` = :descr,`preco` = :pr WHERE `produto`.`id` = :id";

try {
    $comando = $conexao->prepare($codigoSQL);

    $resultado = $comando->execute(array('nm' => $_GET['nome'], 'ft' => $_GET['foto'],'descr' => $_GET['descricao'],'pr' => $_GET['preco'], 'id' => $_GET['id']));

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