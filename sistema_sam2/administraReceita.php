<?php 

    include 'conexao.php';
    session_start();

    $sql = "SELECT receitas.id as id,receitas.paciente as nome, receitas.medicamento as medicamento,receitas.dose as dose, receitas.data_adm as data_adm, receitas.hora_adm as hora_adm FROM receitas where receitas.id = {$_GET['idd']}";
    $comando = $conexao->prepare($sql);
    $resultado = $comando->execute();

    $linha = $comando->fetch();

    $paciente = $linha['nome'];
    $medicamento = $linha['medicamento'];
    $data_adm = $_GET['data_adm'];
    $hora_adm = $_GET['hora_adm'];
    $dose = $linha['dose'];
    
    date_default_timezone_set('America/Sao_Paulo');
    $data_reg = date('y-m-d');
    $hora_reg = date('H:i:s');

    $sql = "INSERT INTO administracao (id,paciente,medicamento,enfermeiro,data_adm,hora_adm,dose,data_reg,hora_reg) VALUES (NULL,'$paciente','$medicamento','{$_SESSION['nome']}','$data_adm','$hora_adm','$dose','$data_reg','$hora_reg')";

    try{
        $comando = $conexao->prepare($sql);
        $resultado = $comando->execute();

        $sql = "UPDATE `receitas` SET `status` = 'I' WHERE `receitas`.`id` = {$_GET['idd']};";
        $comando = $conexao->prepare($sql);
        $resultado = $comando->execute();

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