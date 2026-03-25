<!DOCTYPE html>
<html>
<head>
    <title>Excluir Contato</title>
    <link rel="stylesheet" href="estilo4.css">
</head>
<body>

<?php

include('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM contatos WHERE id=$id";

if (mysqli_query($conexao, $sql)) {
    echo "<h2>O contato foi excluído com sucesso!</h2>";
    echo "<a href='index.php'>VOLTAR</a>";
    exit;
} else {
    echo "<h2>Erro ao excluir o contato.</h2> " . mysqli_error($conexao);
    echo "<a href='index.php'>VOLTAR</a>";
    exit;
}
