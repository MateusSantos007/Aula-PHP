<?php 

    include 'conexao.php';
    session_start();

    $sql = "INSERT INTO pacientes (id,nome,leito) VALUES (NULL,:nome,:leito)";

    if(isset($_SESSION['tipo_login'])){
        try{
            $comando = $conexao->prepare($sql);
            $resultado = $comando->execute(array("nome" => $_GET['nome'],"leito" => $_GET['leito']));
    
            if($resultado){
                //echo "Cadastro Realizado com Sucesso";
                $r = array('resposta' => 1);
                
            }else{
                //echo "Erro ao realizar o cadastro";
                $r = array('resposta' => 0);
            }
            echo json_encode($r);
    
        } catch (Exception $e){
            echo "Erro:".$e;
        }    
    }else{
        header('location:login.php');
    }
    

?>