<?php
    include 'conexao.php';

	try {
		$id = $_GET['id'];
		$comandoSQL = "DELETE FROM `times` WHERE `times`.`id` = $id";
		$resultado = $conexao->exec($comandoSQL);
	
		if($resultado != 0) {
			header('location:mostrar.php');
		} else {
			echo "Erro ao apagar o item!";
		}
	} catch (Exception $e) {
		echo "Erro $e";
	}
?>