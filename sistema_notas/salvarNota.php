<?php

    include 'conexao.php';

    $comandoSQL = "SELECT id_turma from alunos WHERE {$_GET['id_aluno']} = id";
    $cd = $conexao->prepare($comandoSQL);
    $resultado = $cd->execute();
    $linha = $cd->fetch();
    $id_turma = $linha['id_turma'];

    $codigoSQL = "INSERT INTO `notas` (`id`, `valor`,`id_aluno`,`id_turma`) VALUES (NULL, :valor,:id_aluno , :id_turma)";


    if($_GET['valor']){
        try{

            $comando = $conexao->prepare($codigoSQL);
            
    
            $resultado = $comando->execute(array('valor' => $_GET['valor'],'id_aluno' => $_GET['id_aluno'],'id_turma' => $id_turma));
    
            if($resultado){
                header('location: mostraAluno.php');
                echo "correto";
            }else{
                echo "Erro";
            }
            
            $conexao = null;
    
        } catch(Exception $e){
            echo "Erro $e";
        }
    }else{
        header('location:cadastrarNota.php');
    }
?>