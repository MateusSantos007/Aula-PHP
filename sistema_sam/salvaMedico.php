<?php 

    include 'conexao.php';

    $sql = "INSERT INTO medicos (id,nome,especialidade,CRM,usuario,senha) VALUES (NULL,:nome,:especialidade,:CRM,:usuario,:senha)";

    try{
        $comando = $conexao->prepare($sql);
        $resultado = $comando->execute(array("nome" => $_POST['nome'],"especialidade" => $_POST['especialidade'],"CRM" => $_POST['CRM'],"usuario" => $_POST['usuario'], "senha" => $_POST['senha']));

        if($resultado){
            echo "Cadastro Realizado com Sucesso";
        }else{
            echo "Erro ao realizar o cadastro";
        }

    } catch (Exception $e){
        echo "Erro:".$e;
    }

?>