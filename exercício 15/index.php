<?php

include "funcoes.php";

echo "IMC: " . calcularIMC(70, 1.75) . "<br><br>";

if (validarEmail("teste@email.com")) {
    echo "E-mail válido<br><br>";
} else {
    echo "E-mail inválido<br><br>";
}

echo "Senha aleatória: " . gerarSenha(8) . "<br><br>";

echo "Quantidade de vogais: " . contarVogais("Programacao") . "<br><br>";

echo "Texto invertido: " . inverterTexto("musica") . "<br><br>";

echo "Idade: " . calcularIdade(2007) . " anos<br><br>";

echo "Moeda convertida: " . converterMoeda(100, 5.50) . "<br><br>";

echo "Telefone: " . formatarTelefone("47999998888") . "<br><br>";

echo saudacao() . "<br><br>";

echo validarSenha("12345678");