<!DOCTYPE html>
<html>
<head>
    <title>Salvar Contato</title>
    <link rel="stylesheet" href="estilo2.css"> 
</head>
<body>




<?php
include ('conexao.php');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$fone = $_POST['fone'];

$sql = "INSERT INTO contatos (nome,endereco, telefone)
VALUES ('$nome', '$endereco', '$fone')";

if (mysqli_query($conexao, $sql)){
echo "<h2> Contato foi adicionado com sucesso</h2>";
echo "<a href='index.php'> VOLTAR </a>";
}
else {
    echo " h2> Erro a o adicionar o contato</h2>". mysqli_error($conexao);
    echo "<a href='index.php'> VOLTAR </a>";
}



?>

</body>
</html>