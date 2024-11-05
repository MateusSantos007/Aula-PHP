<?php 

    include 'conexao.php';
    session_start();

    $sql = "INSERT INTO pacientes (id,nome,leito) VALUES (NULL,:nome,:leito)";

    if(isset($_SESSION['tipo_login'])){
        try{
            $comando = $conexao->prepare($sql);
            $resultado = $comando->execute(array("nome" => $_POST['nome'],"leito" => $_POST['leito']));
    
            if($resultado){
                echo "Cadastro Realizado com Sucesso";
                header('location:cadastroPaciente.php');
            }else{
                echo "Erro ao realizar o cadastro";
            }
    
        } catch (Exception $e){
            echo "Erro:".$e;
        }    
    }else{
        header('location:login.php');
    }
    

?>