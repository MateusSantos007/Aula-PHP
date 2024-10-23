<?php

    $host = "localhost";
    $user = "root";
    $database = "sistema_notas";
    $password = "";
    $dsn = "mysql:host=$host;dbname=$database";

    $conexao = new PDO($dsn,$user,$password);

?>