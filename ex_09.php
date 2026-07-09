<?php

function analisarNumero($numero)
{
    if ($numero % 2 == 0) {
        $par = "Par";
    } else {
        $par = "Ímpar";
    }

    $primo = "Primo";

    if ($numero < 2) {
        $primo = "Não é primo";
    } else {
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $primo = "Não é primo";
                break;
            }
        }
    }

    $soma = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $soma += $i;
        }
    }

    if ($soma == $numero) {
        $perfeito = "Perfeito";
    } else {
        $perfeito = "Não é perfeito";
    }

    return array($par, $primo, $perfeito);
}

$numero = 28;

$resultado = analisarNumero($numero);

echo "Número: " . $numero . "<br>";
echo $resultado[0] . "<br>";
echo $resultado[1] . "<br>";
echo $resultado[2];