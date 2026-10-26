
<?php
$nome = "João";

$nota1 = 8;
$nota2 = 7;
$nota3 = 9;

$media = ($nota1 + $nota2 + $nota3) / 3;

$resultado = ($media >= 7) ? "Aprovado" : "Reprovado";

echo "Nome do aluno: " . $nome . "<br>";
echo "Nota 1: " . $nota1 . "<br>";
echo "Nota 2: " . $nota2 . "<br>";
echo "Nota 3: " . $nota3 . "<br>";
echo "Média: " . number_format($media, 2, ',', '.') . "<br>";
echo "Situação: " . $resultado;
?>
