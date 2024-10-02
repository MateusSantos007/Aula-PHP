<?php

    include 'conexao.php';

    $codigoSQL = "INSERT INTO `ingredientes` (`id`, `nome`, `quantidade`) VALUES (NULL, :nome, :quantidade)";

    echo $_GET['nome']."<br>";
    echo $_GET['quantidade']."<br>";

    try{

        $comando = $conexao->prepare($codigoSQL);
        
        $quantidade = str_replace(',','.',$_GET['quantidade']);

        $resultado = $comando->execute(array('nome' => $_GET['nome'], 'quantidade' => $quantidade));

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