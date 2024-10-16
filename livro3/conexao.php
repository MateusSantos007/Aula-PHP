<?php

    $host = "localhost";
    $user = "root";
    $database = "bibilioteca";
    $password = "";
    $dsn = "mysql:host=$host;dbname=$database";

    $conexao = new PDO($dsn,$user,$password);

?>