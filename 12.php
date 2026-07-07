<?php

function analisarProdutos($produtos, $pesquisa)
{
    $maiorPreco = $produtos[0]["preco"];
    $menorPreco = $produtos[0]["preco"];
    $produtoCaro = $produtos[0]["nome"];
    $produtoBarato = $produtos[0]["nome"];
    $soma = 0;
    $encontrado = "Produto não encontrado";

    for ($i = 0; $i < count($produtos); $i++) {
        $soma += $produtos[$i]["preco"];

        if ($produtos[$i]["preco"] > $maiorPreco) {
            $maiorPreco = $produtos[$i]["preco"];
            $produtoCaro = $produtos[$i]["nome"];
        }

        if ($produtos[$i]["preco"] < $menorPreco) {
            $menorPreco = $produtos[$i]["preco"];
            $produtoBarato = $produtos[$i]["nome"];
        }

        if (strtolower($produtos[$i]["nome"]) == strtolower($pesquisa)) {
            $encontrado = "Produto encontrado: " . $produtos[$i]["nome"] . " - R$ " . $produtos[$i]["preco"];
        }
    }

    $media = $soma / count($produtos);

    return array($produtoCaro, $produtoBarato, $media, $encontrado);
}

$produtos = array(
    array("nome" => "Arroz", "preco" => 25),
    array("nome" => "Feijão", "preco" => 10),
    array("nome" => "Macarrão", "preco" => 8),
    array("nome" => "Carne", "preco" => 50)
);

$pesquisa = "Carne";

$resultado = analisarProdutos($produtos, $pesquisa);

echo "Produto mais caro: " . $resultado[0] . "<br>";
echo "Produto mais barato: " . $resultado[1] . "<br>";
echo "Média dos preços: R$ " . $resultado[2] . "<br>";
echo $resultado[3];