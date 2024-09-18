<?php

    include 'produto.php';

    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $produtos = new Produto($_POST['nome'],$_POST['descricao'],$_POST['valor'],$_POST['img']);

        if(is_null($_SESSION['produtos'])){
            $_SESSION['produtos'] = [];
        }
        array_push($_SESSION['produtos'],serialize($produtos));
        header('location: mostra.php');
    } else {

        header('location: novo.php');
    }

?>