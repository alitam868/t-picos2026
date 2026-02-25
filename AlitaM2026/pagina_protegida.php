<?php

$nome = $_POST["nome"];
$senha = $_POST["senha"];

echo "<h2>Resultado</h2>";

if ($senha == 1234) {

    echo "Bem Vindo " . $nome . "<br>";

} else {

    echo "Senha incorreta";

}
/* A senha é: 1234/*
?>
