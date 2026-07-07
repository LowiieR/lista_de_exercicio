<?php

function formatarTexto($texto)
{
    $maiusculas = strtoupper($texto);
    $minusculas = strtolower($texto);
    $primeiras = ucwords(strtolower($texto));
    $quantidade = strlen($texto);

    return array($maiusculas, $minusculas, $primeiras, $quantidade);
}

$texto = "programação em php";

$resultado = formatarTexto($texto);

echo "Maiúsculas: " . $resultado[0] . "<br>";
echo "Minúsculas: " . $resultado[1] . "<br>";
echo "Primeira letra de cada palavra: " . $resultado[2] . "<br>";
echo "Quantidade de caracteres: " . $resultado[3];