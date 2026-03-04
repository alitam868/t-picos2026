<?php

$alunos = [
["nome" => "Alita", "nota" => 9],
["nome" => "Geovana", "nota" => 4],
["nome" => "Luiza", "nota" => 5]
];

$soma = 0;
foreach ($alunos as $aluno) {
$soma += $aluno["nota"];
}
$media = $soma / count($alunos);

echo "<h2>Média da turma: " . round($media, 2) . "</h2>";
$maiorNota = 0;
$melhorAluno = "";

foreach ($alunos as $aluno) {
if ($aluno["nota"] > $maiorNota) {
$maiorNota = $aluno["nota"];
$melhorAluno = $aluno["nome"];
}
}

echo "<p>Maior nota: $maiorNota</p>";
echo "<p>Melhor aluno: $melhorAluno</p>";

?>
