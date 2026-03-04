<?php
$numeros = [10, 20, 30, 40, 50];
$numeros[] = 60;
unset($numeros[2]);
foreach ($numeros as $num) {
 echo $num . "<br>";
}
?>
