<?php

function calcularSubtotal($produto)
{
    return $produto["quantidade"] * $produto["valor"];
}

function calcularDesconto($total)
{
    if ($total > 1000) {
        return $total * 0.15;
    }

    if ($total > 500) {
        return $total * 0.10;
    }

    return 0;
}

function calcularFrete($total)
{
    if ($total <= 300) {
        return 35;
    }

    if ($total <= 800) {
        return 20;
    }

    return 0;
}

function encontrarProdutoMaisCaro($produtos)
{
    $maisCaro = $produtos[0];

    foreach ($produtos as $produto) {
        if ($produto["valor"] > $maisCaro["valor"]) {
            $maisCaro = $produto;
        }
    }

    return $maisCaro;
}

function encontrarMaiorSubtotal($subtotais)
{
    $maior = $subtotais[0];

    foreach ($subtotais as $subtotal) {
        if ($subtotal["subtotal"] > $maior["subtotal"]) {
            $maior = $subtotal;
        }
    }

    return $maior;
}

function processarPedido($produtos)
{
    $subtotais = [];
    $valorTotal = 0;
    $totalItens = 0;

    foreach ($produtos as $produto) {

        $subtotal = calcularSubtotal($produto);

        $subtotais[] = [
            "nome" => $produto["nome"],
            "subtotal" => $subtotal
        ];

        $valorTotal += $subtotal;
        $totalItens += $produto["quantidade"];
    }

    $desconto = calcularDesconto($valorTotal);
    $frete = calcularFrete($valorTotal);
    $valorFinal = $valorTotal - $desconto + $frete;

    return [
        "quantidadeProdutos" => count($produtos),
        "totalItens" => $totalItens,
        "produtoMaisCaro" => encontrarProdutoMaisCaro($produtos),
        "produtoMaiorSubtotal" => encontrarMaiorSubtotal($subtotais),
        "subtotais" => $subtotais,
        "valorTotal" => $valorTotal,
        "desconto" => $desconto,
        "frete" => $frete,
        "valorFinal" => $valorFinal
    ];
}