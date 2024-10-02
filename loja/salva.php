<?php

    include 'conexao.php';

    $codigoSQL = "INSERT INTO `produto` (`id`, `nome`, `foto`, `descricao`, `preco`) VALUES (NULL, :nome, :foto, :descricao, :preco)";

    echo $_GET['nome']."<br>";
    echo $_GET['foto']."<br>";
    echo $_GET['descricao']."<br>";
    echo $_GET['preco']."<br>";

    try{

        $comando = $conexao->prepare($codigoSQL);
        
        $preco = str_replace(',','.',$_GET['preco']);

        $resultado = $comando->execute(array('nome' => $_GET['nome'], 'foto' => $_GET['foto'], 'descricao' => $_GET['descricao'], 'preco' => $preco));

        if($resultado){
            echo "Comando executado";
        }else{
            echo "Erro";
        }

        $conexao = null;

    } catch(Exception $e){
        echo "Erro $e";
    }
?>