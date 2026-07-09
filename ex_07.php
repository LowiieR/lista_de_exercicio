<?php

function calcularDesconto($valor)
{
    if ($valor > 1000) {
        $desconto = 30;
    } elseif ($valor > 500) {
        $desconto = 20;
    } elseif ($valor > 100) {
        $desconto = 10;
    } else {
        $desconto = 0;
    }

    $valorDesconto = $valor * ($desconto / 100);
    $valorFinal = $valor - $valorDesconto;

    return array($valor, $desconto, $valorFinal);
}

$valorCompra = 750;

$resultado = calcularDesconto($valorCompra);

echo "Valor original: R$ " . $resultado[0] . "<br>";
echo "Desconto: " . $resultado[1] . "%<br>";
echo "Valor final: R$ " . $resultado[2];