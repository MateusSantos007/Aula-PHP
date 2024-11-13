<?php

    include 'conexao.php';
    session_start();

    if($_POST['tipo_login'] == 'medico'){
        try{
            $sql = "SELECT id,nome,CRM FROM medicos WHERE usuario LIKE :usuario AND senha LIKE :senha";
            $comando = $conexao->prepare($sql);
            $resultado = $comando->execute(array("usuario" => $_POST['usuario'],"senha" => $_POST['senha']));
            $linha = $comando->fetch();
            if($linha == true){
                $_SESSION['tipo_login'] = $_POST['tipo_login'];
                $_SESSION['nome'] = $linha['nome'];
                $_SESSION['id'] = $linha['id'];
                header('location:cadastroPaciente.php');
            }else{
                echo "Erro";
                header('location:login.php');
            }


        } catch (Exception $e){
            echo "Erro:".$e;
        }

    }else{
        try{
            $sql = "SELECT id,nome,COREN FROM enfermeiros WHERE usuario LIKE :usuario AND senha LIKE :senha";
            $comando = $conexao->prepare($sql);
            $resultado = $comando->execute(array("usuario" => $_POST['usuario'],"senha" => $_POST['senha']));
            $linha = $comando->fetch();
            if($linha == true){
                $_SESSION['tipo_login'] = $_POST['tipo_login'];
                $_SESSION['nome'] = $linha['nome'];
                $_SESSION['id'] = $linha['id'];
                echo "Sucesso";
                header('location:mostraReceita.php');
            }else{
                echo "Erro";
                header('location:login.php');
            }


        } catch (Exception $e){
            echo "Erro:".$e;
        }
    }

    $conexao = null;

?>