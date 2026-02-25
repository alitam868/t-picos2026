<!DOCTYPE html>
<html  lang="pt-BR">
<head>

    <title>Formulário de Notas</title>
</head>
<body>
    <h1>Formulário de Notas</h1>
    <form action="atv033.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>

        <label for="turma">Turma:</label>
        <input type="text" id="turma" name="turma" required>
        <br><br>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required>
        <br><br>

        <label for="nota1">Nota 1º Semestre:</label>
        <input type="text" id="nota1" name="nota1" step="0.01" required>
        <br><br>

        <label for="nota2">Nota 2º Semestre:</label>
        <input type="text" id="nota2" name="nota2" step="0.01" required>
        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>