<?php 

    include 'conexao.php';

    $sql = "INSERT INTO medicos (id,nome,especialidade,CRM,usuario,senha) VALUES (NULL,:nome,:especialidade,:CRM,:usuario,:senha)";

    try{
        $comando = $conexao->prepare($sql);
        $resultado = $comando->execute(array("nome" => $_GET['nome'],"especialidade" => $_GET['especialidade'],"CRM" => $_GET['CRM'],"usuario" => $_GET['usuario'], "senha" => $_GET['senha']));

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

?>