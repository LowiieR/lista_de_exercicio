<?php

function calcularMedia($notas)
{
    $maior = max($notas);
    $menor = min($notas);

    $soma = 0;

    for ($i = 0; $i < count($notas); $i++) {
        $soma += $notas[$i];
    }

    $media = $soma / count($notas);

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    return array($maior, $menor, $media, $situacao);
}

$notas = array(8, 6, 7, 9);

$resultado = calcularMedia($notas);

echo "Maior nota: " . $resultado[0] . "<br>";
echo "Menor nota: " . $resultado[1] . "<br>";
echo "Média: " . $resultado[2] . "<br>";
echo "Situação: " . $resultado[3];