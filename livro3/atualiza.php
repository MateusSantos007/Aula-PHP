<?php

include 'conexao.php';

$codigoSQL = "UPDATE `livro` SET `titulo` = :tt,`idioma` = :idi, `qtdpag` = :qtd,`editora` = :ed,`datapublicacao` = :dt, `ISBN` = :isb WHERE `livro`.`id` = :id";

try {
    $comando = $conexao->prepare($codigoSQL);

    $resultado = $comando->execute(array('tt' => $_GET['titulo'], 'idi' => $_GET['idioma'],'qtd' => $_GET['qtdpag'],'ed' => $_GET['editora'],'dt' => $_GET['datapublicacao'],'isb' => $_GET['ISBN'], 'id' => $_GET['id']));

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