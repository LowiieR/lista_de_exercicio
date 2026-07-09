<?php

function criptografarMensagem($texto)
{
    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {
        $resultado .= chr(ord($texto[$i]) + 3);
    }

    return $resultado;
}

function descriptografarMensagem($texto)
{
    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {
        $resultado .= chr(ord($texto[$i]) - 3);
    }

    return $resultado;
}

$mensagem = "Ola Mundo";

$criptografada = criptografarMensagem($mensagem);
$descriptografada = descriptografarMensagem($criptografada);

echo "Mensagem original: " . $mensagem . "<br>";
echo "Mensagem criptografada: " . $criptografada . "<br>";
echo "Mensagem descriptografada: " . $descriptografada;