<?php

function ordenarNomes($nomes)
{
    $lista = explode(",", $nomes);

    for ($i = 0; $i < count($lista); $i++) {
        $lista[$i] = trim($lista[$i]);
    }

    sort($lista);

    return $lista;
}

$nomes = "Carlos, Ana, João, Beatriz, Marcos";

$resultado = ordenarNomes($nomes);

foreach ($resultado as $nome) {
    echo $nome . "<br>";
}