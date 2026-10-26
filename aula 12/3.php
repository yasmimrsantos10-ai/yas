<?php
$peso = 70;
$altura = 1.75;

$imc = $peso / ($altura * $altura);

echo "Seu IMC é: " . round($imc, 2);
?>