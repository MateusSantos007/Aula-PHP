<?php

    include 'conexao.php';
    // comando que será executado
    $comandoSQL = 'SELECT * FROM `produto`';

    // prepara para executar o comando
    $comando = $conexao->prepare($comandoSQL);

    // executa o comando
    $resultado = $comando->execute();

    if($resultado){
        while($linha = $comando->fetch()) {
            echo $linha['nome']." ".$linha['foto']." ".$linha['descricao']." ".$linha['preco'];
            echo ' <a href="apaga.php?id='.$linha['id'].'">Apagar</a>';
            echo ' <a href="recebeid.php?id='.$linha['id'].'">Atualizar</a>';
            echo "<br>";
        }
    }

?>