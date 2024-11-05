<?php 

    include 'conexao.php';

    $sql = "INSERT INTO enfermeiros (id,nome,COREN,usuario,senha) VALUES (NULL,:nome,:COREN,:usuario,:senha)";

    try{
        $comando = $conexao->prepare($sql);
        $resultado = $comando->execute(array("nome" => $_POST['nome'],"COREN" => $_POST['COREN'],"usuario" => $_POST['usuario'], "senha" => $_POST['senha']));

        if($resultado){
            echo "Cadastro Realizado com Sucesso";
            header('location:mostraReceita.php');
        }else{
            echo "Erro ao realizar o cadastro";
        }

    } catch (Exception $e){
        echo "Erro:".$e;
    }

?>