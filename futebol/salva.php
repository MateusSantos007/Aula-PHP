<?php

    include 'conexao.php';

    $codigoSQL = "INSERT INTO `times` (`id`, `nome`, `pontos`) VALUES (NULL, :nome, :pontos)";

    echo $_GET['nome']."<br>";
    echo $_GET['pontos']."<br>";

    try{

        $comando = $conexao->prepare($codigoSQL);
        

        $resultado = $comando->execute(array('nome' => $_GET['nome'], 'pontos' => $_GET['pontos']));

        if($resultado){
            echo "Comando executado";
        }else{
            echo "Erro";
        }
        
        $conexao = null;

    } catch(Exception $e){
        echo "Erro $e";
    }
?>
