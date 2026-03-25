<!DOCTYPE html>
<head> 
    <title>Agenda de contatos- T30</title>
</head>
<body>
<h1>Agenda- Turma 30- 2026</h1>
<link rel="stylesheet" href="estilo.css">
<h2>Cadastrar contatos</h2>
<form action="salvar.php" method="POST">
    Nome: <input type = "text" name="nome"> <br><br>
    Endereço: <input type = "text" name="endereco"><br><br>
    Telefone <input type = "number" name="                                                                                                                                                                                                                                               fone"><br><br>
    <input type = "submit" name="Cadastrar">
</form>








<?php
include ('conexao.php');
$sql = "SELECT * FROM contatos";
 
 $resultado = mysqli_query($conexao,$sql);
if (mysqli_num_rows($resultado) > 0){
    //tem contatos (mostre)
   while ($linha = mysqli_fetch_assoc ($resultado)){
    echo $linha ['nome']."|". $linha ['endereco']."|" . $linha ['telefone']. "| <a href='editar.php?id=".$linha['id']."'>
    EDITAR</a> |<a href='excluir.php?id=".$linha['id']."'
    onclick=' return confirm(\"você quer realmente excluir o contato?\");'
    > EXCLUIR</a>" . "<br>";   }

}
else{
    echo "<h3> Nenhum contato registrado.</h3>";
}

?>


</body>









</html>