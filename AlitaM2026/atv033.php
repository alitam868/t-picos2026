<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nome = htmlspecialchars($_POST['nome']);
    $turma = htmlspecialchars($_POST['turma']);
    $curso = htmlspecialchars($_POST['curso']);
    $nota1 = (float) $_POST['nota1'];  
    $nota2 = (float) $_POST['nota2'];  

   
    $media = ($nota1 + $nota2) / 2;

  
    if ($media >= 7) {
        $resultado = "Você está APROVADO! :)";
    } else {
        $resultado = "Você pegou exame! :( ";
    }

 
    echo "<h1>Resultado do Formulário</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Turma:</strong> $turma</p>";
    echo "<p><strong>Curso:</strong> $curso</p>";
    echo "<p><strong>Nota 1º Semestre:</strong> $nota1</p>";
    echo "<p><strong>Nota 2º Semestre:</strong> $nota2</p>";
    echo "<p><strong>Média:</strong> $media</p>";
    echo "<p><strong>Resultado:</strong> $resultado</p>";
    echo '<br><a href="atv03.php"><button type="button">Voltar</button></a>';
} else {
    echo "Nenhum dado enviado.";
}
?>