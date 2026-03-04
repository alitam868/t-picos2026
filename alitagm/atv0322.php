<?php 

$produto = [
 "nome" => "bolacha",
 "valor" => 5.99,
 "estoque" => "47 caixas no estoque"
];

foreach ($produto as $chave => $valor) {
 echo "$chave: $valor <br>";
}
?>