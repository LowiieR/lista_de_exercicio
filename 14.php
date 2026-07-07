<?php

function estatisticasNumericas($numeros)
{
    $soma = array_sum($numeros);
    $media = $soma / count($numeros);
    $maior = max($numeros);
    $menor = min($numeros);

    sort($numeros);

    $meio = count($numeros) / 2;

    if (count($numeros) % 2 == 0) {
        $mediana = ($numeros[$meio - 1] + $numeros[$meio]) / 2;
    } else {
        $mediana = $numeros[floor($meio)];
    }

    $pares = 0;
    $impares = 0;

    for ($i = 0; $i < count($numeros); $i++) {
        if ($numeros[$i] % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    return array($soma, $media, $maior, $menor, $mediana, $pares, $impares);
}

$numeros = array(10, 5, 8, 3, 12, 7);

$resultado = estatisticasNumericas($numeros);

echo "Soma: " . $resultado[0] . "<br>";
echo "Média: " . $resultado[1] . "<br>";
echo "Maior valor: " . $resultado[2] . "<br>";
echo "Menor valor: " . $resultado[3] . "<br>";
echo "Mediana: " . $resultado[4] . "<br>";
echo "Quantidade de pares: " . $resultado[5] . "<br>";
echo "Quantidade de ímpares: " . $resultado[6];
