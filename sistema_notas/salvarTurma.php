<?php

    include 'conexao.php';

    $codigoSQL = "INSERT INTO `turmas` (`id`, `nome`) VALUES (NULL, :nome)";

    echo $_GET['nome']."<br>";

    if($_GET['nome']){
        try{

            $comando = $conexao->prepare($codigoSQL);
            
    
            $resultado = $comando->execute(array('nome' => $_GET['nome']));
    
            if($resultado){
                header('location: mostraTurma.php');
            }else{
                echo "Erro";
            }
            
            $conexao = null;
    
        } catch(Exception $e){
            echo "Erro $e";
        }
    }else{
        header('location:cadastrarTurma.php');
    }
?>