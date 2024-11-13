<?php 

    include 'conexao.php';
    session_start();

    $sql = "INSERT INTO receitas (id,paciente,medicamento,medico,data_adm,hora_adm,dose,`status`) VALUES (NULL,:paciente,:medicamento,:medico,:data_adm,:hora_adm,:dose,'A')";

    try{
        $comando = $conexao->prepare($sql);
        $resultado = $comando->execute(array("paciente" => $_POST['paciente'],"medicamento" => $_POST['medicamento'],'medico' => $_SESSION['nome'],'data_adm' => $_POST['data_adm'],'hora_adm' => $_POST['hora_adm'],'dose' => $_POST['dose']));

        if($resultado){
            echo "Cadastro Realizado com Sucesso";
            header('location:CadastroReceita.php');
        }else{
            echo "Erro ao realizar o cadastro";
        }

    } catch (Exception $e){
        echo "Erro:".$e;
    }    
    

?>