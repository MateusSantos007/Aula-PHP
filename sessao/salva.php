<?php
session_start();

$_SESSION['nome'] = $_GET['nome'];
header('location: mostra.php');
?>