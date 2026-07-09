<?php

require_once "funcoes.php";

$produtos = [
    [
        "nome" => "Notebook",
        "quantidade" => 1,
        "valor" => 3500
    ],
    [
        "nome" => "Mouse",
        "quantidade" => 2,
        "valor" => 120
    ],
    [
        "nome" => "Teclado",
        "quantidade" => 1,
        "valor" => 250
    ]
];

$relatorio = processarPedido($produtos);

echo "<h2>RELATÓRIO DO PEDIDO</h2>";

echo "<strong>Produtos diferentes:</strong> " . $relatorio["quantidadeProdutos"] . "<br>";
echo "<strong>Total de itens:</strong> " . $relatorio["totalItens"] . "<br><br>";

echo "<strong>Produto mais caro:</strong> " .
    $relatorio["produtoMaisCaro"]["nome"] .
    " (R$ " . number_format($relatorio["produtoMaisCaro"]["valor"], 2, ",", ".") . ")<br>";

echo "<strong>Maior subtotal:</strong> " .
    $relatorio["produtoMaiorSubtotal"]["nome"] .
    " (R$ " . number_format($relatorio["produtoMaiorSubtotal"]["subtotal"], 2, ",", ".") . ")<br><br>";

echo "<h3>Subtotais</h3>";

foreach ($relatorio["subtotais"] as $produto) {
    echo $produto["nome"] . ": R$ " .
        number_format($produto["subtotal"], 2, ",", ".") . "<br>";
}

echo "<br>";

echo "<strong>Valor total:</strong> R$ " .
    number_format($relatorio["valorTotal"], 2, ",", ".") . "<br>";

echo "<strong>Desconto:</strong> R$ " .
    number_format($relatorio["desconto"], 2, ",", ".") . "<br>";

echo "<strong>Frete:</strong> R$ " .
    number_format($relatorio["frete"], 2, ",", ".") . "<br>";

echo "<strong>Valor final:</strong> R$ " .
    number_format($relatorio["valorFinal"], 2, ",", ".");