<?php

    include 'conexao.php';

    $codigoSQL = "INSERT INTO `livro` (`id`, `titulo`, `idioma`, `qtdpag`, `editora`, `datapublicacao`, `ISBN`) VALUES (NULL, :titulo, :idioma, :qtdpag, :editora, :datapublicacao, :ISBN)";

    echo $_GET['titulo']."<br>";
    echo $_GET['idioma']."<br>";
    echo $_GET['qtdpag']."<br>";
    echo $_GET['editora']."<br>";
    echo $_GET['datapublicacao']."<br>";
    echo $_GET['ISBN']."<br>";

    try{

        $comando = $conexao->prepare($codigoSQL);
        

        $resultado = $comando->execute(array('titulo' => $_GET['titulo'], 'idioma' => $_GET['idioma'], 'qtdpag' => $_GET['qtdpag'], 'editora' => $_GET['editora'],'datapublicacao' => $_GET['datapublicacao'],'ISBN' => $_GET['ISBN']));

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