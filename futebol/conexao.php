<?php

    $host = "localhost";
    $user = "root";
    $database = "futebol";
    $password = "";
    $dsn = "mysql:host=$host;dbname=$database";

    $conexao = new PDO($dsn,$user,$password);

?>