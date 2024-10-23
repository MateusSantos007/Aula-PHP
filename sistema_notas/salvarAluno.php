<?php

    include 'conexao.php';

    $codigoSQL = "INSERT INTO `alunos` (`id`, `nome`,`id_turma`) VALUES (NULL, :nome, :id_turma)";

    echo $_GET['nome']."<br>";

    if($_GET['nome']){
        try{

            $comando = $conexao->prepare($codigoSQL);
            
    
            $resultado = $comando->execute(array('nome' => $_GET['nome'],'id_turma' => $_GET['id_turma']));
    
            if($resultado){
                header('location: mostraAluno.php');
            }else{
                echo "Erro";
            }
            
            $conexao = null;
    
        } catch(Exception $e){
            echo "Erro $e";
        }
    }else{
        header('location:cadastrarAluno.php');
    }
?>