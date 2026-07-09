<?php

function calcularIMC($peso, $altura)
{
    return $peso / ($altura * $altura);
}

function validarEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function gerarSenha($tamanho)
{
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $senha = "";

    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return $senha;
}

function contarVogais($texto)
{
    $vogais = "aeiouAEIOU";
    $contador = 0;

    for ($i = 0; $i < strlen($texto); $i++) {
        if (strpos($vogais, $texto[$i]) !== false) {
            $contador++;
        }
    }

    return $contador;
}

function inverterTexto($texto)
{
    return strrev($texto);
}

function calcularIdade($ano)
{
    return date("Y") - $ano;
}

function converterMoeda($valor, $cotacao)
{
    return $valor * $cotacao;
}

function formatarTelefone($telefone)
{
    return "(" . substr($telefone, 0, 2) . ") " . substr($telefone, 2, 5) . "-" . substr($telefone, 7);
}

function saudacao()
{
    $hora = date("H");

    if ($hora < 12) {
        return "Bom dia";
    } elseif ($hora < 18) {
        return "Boa tarde";
    } else {
        return "Boa noite";
    }
}

function validarSenha($senha)
{
    if (strlen($senha) >= 8) {
        return "Senha forte";
    } else {
        return "Senha fraca";
    }
}